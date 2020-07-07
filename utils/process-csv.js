const fs = require('fs')
const path = require('path')
const csvtojson = require('csvtojson')

csvtojson().fromFile('resources/data/foia_150k_plus.csv').then((data) => {
	let jsonData = JSON.stringify(data, null, 4)
	fs.writeFile('database/seeds/foia_150k_plus.json', jsonData, (err) => {
		if (err) throw err;
		console.log('Done')
	})
}).catch(err => {
	console.log(err)
	throw err
})
