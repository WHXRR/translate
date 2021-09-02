const fs = require('fs');
const path = require('path')
const { exec } = require('child_process');
// const data = fs.readFileSync('./zh/addcart.js', 'utf-8');

// let dataObj = data.replace('export default', '').trim()
// // console.log(JSON.parse(dataObj))
// // dataObj = dataObj.replace(/\\r\\n/ig, '')
// // console.log(dataObj, typeof dataObj)

// let newData = dataObj
// for (let i = 0; i < dataObj.length; i++) {
//   if (dataObj[i] === '\n' ) {
//     console.log('\\n true')
//     newData = dataObj[i].substring(0, i) + dataObj[i].slice(i + 1);
//   }
// }

// console.log('newData', newData)
exec(`node ${__dirname}/zh/addcart.js`, (err, sdout, stderr) => {
  if (err) {
    console.error(`exec error: ${err}`);
    return;
  }
  console.log(`stdout: ${sdout}`);
  console.error(`stderr: ${stderr}`);
})