# Drupal Project

This project is a Drupal-based website. The following instructions will help you set up and run the project locally using DDEV.

## Prerequisites

Ensure you have the following tools installed:

- [DDEV](https://ddev.readthedocs.io/en/stable/)
- [Composer](https://getcomposer.org/)
- [Drush](https://www.drush.org/)

## Setup Instructions

Follow these steps to set up the project locally:

1. **Install Dependencies**

   Navigate to the project directory and run the following command to install the necessary Composer dependencies:

   ```bash
   ddev composer install
   ddev start
   ddev import-db --file=specb.sql.gz
   ddev drush cr
   ddev drush uli
   ```
