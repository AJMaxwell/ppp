# PPP

This is just a simple repo that turns the US Small Business Administrations data dump of the Paycheck Protection Program recepients into a searchable database.

### How to use
1.  Clone the repo, then run `composer install` and `npm install`
2.  Download and extract the zip from [here](https://www.sba.gov/funding-programs/loans/coronavirus-relief-options/paycheck-protection-program#section-header-11) or [here](https://sba.box.com/s/wz72fqag1nd99kj3t9xlq49deoop6gzf)
3.  Copy the extracted `foia_150k_plus.csv` to `resources/data/`
4.  Run `node ./utils/process-csv.js` to convert the CSV into a JSON

Well, that's it for now. More to come later.
