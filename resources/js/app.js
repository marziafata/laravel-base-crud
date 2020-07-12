require('./bootstrap');

var $ = require('jquery');

import 'bootstrap';

var moment = require('moment'); // require
moment().format();

// require('handlebars');

//importo moment in tutte le lingue (url locales in html) per avere i mesi in italiano
moment.locale('it');

// //dichiaro le variabili che mi serviranno con Handlebars
// var source = $('#entry-template').html();
// var template = Handlebars.compile(source);

var data_corrente = moment().format('DD MMM YYYY HH:mm');
console.log(data_corrente);

$('.data').append(data_corrente);
