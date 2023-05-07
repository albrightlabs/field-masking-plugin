
# 🔔 Field Masking Plugin

## ✨ What does this plugin do?
Provides the ability to mask form fields using the ignorescobar jquery mask plugin.

## ❓ Why would I use this plugin?
Helpful if you have many form fields that require some specific formatting for consistency.

## 🖥️ How do I install this plugin?
1. Clone this repository into `plugins/albrightlabs/fieldmasking`
2. Run the console command `php artisan october:migrate`
3. Add any class found in the [docs](https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html) to an October CMS form field in the `cssClass` config with the prefix `mask-`.

## ⏫ How do I update this plugin?
Run either of the following commands:
* From the project root, run `php artisan october:util git pull`
* From the plugin root, run `git pull`

## 🚨 Are there any requirements for this plugin?
None other than adding the desired mask class to the `cssClass` config for a specific October CMS form field. For example, adding `cssClass: mask-phone_us` will mask the form field as a US phone number.

## ✨ Future plans
* None at this time but please send suggestions to support@albrightlabs.com.
