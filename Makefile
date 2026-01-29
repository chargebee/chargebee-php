.PHONY: update-version increment-major increment-minor increment-patch test build clean install lint format check publish

# Version file location
VERSION_FILE := VERSION
VERSION_PHP_FILE := src/Version.php
COMPOSER_FILE := composer.json

# PHP commands
PHP := php
COMPOSER := composer
PHPUNIT := vendor/bin/phpunit
PHPSTAN := vendor/bin/phpstan
PHP_CS_FIXER := vendor/bin/php-cs-fixer

update-version:
	@echo "$(VERSION)" > $(VERSION_FILE)
	@perl -pi -e 's|const VERSION = '\''[.\-\d\w]+'\'';|const VERSION = '\''$(VERSION)'\'';|' $(VERSION_PHP_FILE)
	@if [ -f "$(COMPOSER_FILE)" ]; then \
		perl -pi -e 's|"version"\s*:\s*"[.\-\d\w]+"|"version": "$(VERSION)"|' $(COMPOSER_FILE); \
	fi
	@echo "Updated version to $(VERSION)"

increment-major:
	$(eval CURRENT := $(shell cat $(VERSION_FILE)))
	$(eval MAJOR := $(shell echo $(CURRENT) | cut -d. -f1))
	$(eval NEW_VERSION := $(shell echo $$(($(MAJOR) + 1)).0.0))
	@$(MAKE) update-version VERSION=$(NEW_VERSION)
	@echo "Version bumped from $(CURRENT) to $(NEW_VERSION)"

increment-minor:
	$(eval CURRENT := $(shell cat $(VERSION_FILE)))
	$(eval MAJOR := $(shell echo $(CURRENT) | cut -d. -f1))
	$(eval MINOR := $(shell echo $(CURRENT) | cut -d. -f2))
	$(eval NEW_VERSION := $(MAJOR).$(shell echo $$(($(MINOR) + 1))).0)
	@$(MAKE) update-version VERSION=$(NEW_VERSION)
	@echo "Version bumped from $(CURRENT) to $(NEW_VERSION)"

increment-patch:
	$(eval CURRENT := $(shell cat $(VERSION_FILE)))
	$(eval MAJOR := $(shell echo $(CURRENT) | cut -d. -f1))
	$(eval MINOR := $(shell echo $(CURRENT) | cut -d. -f2))
	$(eval PATCH := $(shell echo $(CURRENT) | cut -d. -f3))
	$(eval NEW_VERSION := $(MAJOR).$(MINOR).$(shell echo $$(($(PATCH) + 1))))
	@$(MAKE) update-version VERSION=$(NEW_VERSION)
	@echo "Version bumped from $(CURRENT) to $(NEW_VERSION)"

install:
	@echo "Installing dependencies..."
	@$(COMPOSER) install --no-dev --optimize-autoloader

install-dev:
	@echo "Installing development dependencies..."
	@$(COMPOSER) install

test:
	@echo "Running tests..."
	@$(PHPUNIT) --testdox

test-coverage:
	@echo "Running tests with coverage..."
	@XDEBUG_MODE=coverage $(PHPUNIT) --coverage-html coverage --coverage-text
	@echo "Coverage report generated in coverage/index.html"

format:
	@echo "Formatting code..."
	@if [ -f "$(PHP_CS_FIXER)" ]; then \
		$(PHP_CS_FIXER) fix --allow-risky=yes; \
	else \
		echo "PHP CS Fixer not found. Install it with: composer require --dev friendsofphp/php-cs-fixer"; \
	fi

format-check:
	@echo "Checking code formatting..."
	@if [ -f "$(PHP_CS_FIXER)" ]; then \
		$(PHP_CS_FIXER) fix --dry-run --diff --allow-risky=yes; \
	else \
		echo "PHP CS Fixer not found. Install it with: composer require --dev friendsofphp/php-cs-fixer"; \
	fi

lint:
	@echo "Running PHPStan static analysis..."
	@if [ -f "$(PHPSTAN)" ]; then \
		$(PHPSTAN) analyse --memory-limit=512M; \
	else \
		echo "PHPStan not found. Install it with: composer require --dev phpstan/phpstan"; \
	fi

typecheck: lint

check: format-check lint test
	@echo "All checks passed!"

build: clean
	@echo "Building package..."
	@$(COMPOSER) validate --strict
	@$(COMPOSER) install --no-dev --optimize-autoloader --prefer-dist

clean:
	@echo "Cleaning build artifacts..."
	@rm -rf vendor/
	@rm -rf coverage/
	@rm -rf .phpunit.cache/
	@rm -rf .phpunit.result.cache
	@rm -rf .php-cs-fixer.cache
	@rm -rf composer.lock
	@find . -type f -name '.DS_Store' -delete

