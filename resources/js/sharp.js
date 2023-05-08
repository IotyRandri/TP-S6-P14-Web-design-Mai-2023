const sharp = require('sharp')
const fs = require('fs')
const directory = 'public/images_IA/';

fs.readdirSync(directory).forEach(file => {
    sharp(`${directory}/${file}`)
    .resize(350,230)
    .toFile(`${directory}/${file}-small.jpg`)
});