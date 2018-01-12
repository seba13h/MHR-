const express = require('express');
const app = express();
const path = require('path');
const consolidate = require('consolidate');
const bodyParser = require('body-parser');

app.engine('hbs', consolidate.handlebars);
app.set('view engine', 'hbs');
app.set('views', path.join(__dirname, 'templates'));

//middlewares
app.use('/static', express.static('static'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
  extended: true
}))

app.get('/', (req, res) => res.render('index'));

const listener = app.listen(3000, () =>
  console.log(`Running app on ${listener.address().address}${listener.address().port}`)
);
