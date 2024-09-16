
### 4. Upload Your Package

1. **Push Code to GitHub**:
   - Ensure your code and `composer.json` are pushed to the GitHub repository.

2. **Tag a Release**:
   - Create a new release on GitHub with the version number (e.g., `v1.0.0`).

### 5. Publish to Packagist (Optional but recommended)

1. **Create a Packagist Account**:
   - Go to [Packagist](https://packagist.org/) and sign up.

2. **Submit Your Package**:
   - Add a new package by providing the URL to your GitHub repository.

3. **Configure Webhooks**:
   - Set up webhooks on GitHub to notify Packagist of new releases automatically.

### 6. Verify Installation

Test the installation by requiring your package in a fresh Composer project:

```bash
composer require kaiidenaadhil/corexphp
