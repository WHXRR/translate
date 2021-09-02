const fs = require('fs');
const path = require('path');

const transData = JSON.parse(fs.readFileSync('./lang.json', 'utf-8'));


// fs.readdir(`${__dirname}/en`, (err, files) => {
//   if (err) {
//     console.log('err');
//     return;
//   }
//   files.forEach(zhFile => {
//     exec(`node ${__dirname}/en/${zhFile}`, (err, sdout, stderr) => {
//       if (err) {
//         console.error(`exec error: ${err}`);
//         return;
//       }
//       console.log(`stdout: ${sdout}`);
//       console.error(`stderr: ${stderr}`);
//     })
//   })
// })

let enData = {};
let enLogs = [];
let duLogs = [];

function readZhFiles() {
  fs.readdir(`${__dirname}/json/zh`, (err, files) => {
    if (err) {
      console.log('err');
      return;
    }
    files.forEach(file => {
      const zhStrs = JSON.parse(fs.readFileSync(`${__dirname}/json/zh/${file}`, 'utf-8'));
      enData = JSON.parse(fs.readFileSync(`${__dirname}/json/en/${file}`, 'utf-8'));
      let duData = {};
      transStrs(zhStrs, enData, duData, file);
      fs.writeFileSync(`${__dirname}/newJson/en/${file}`, JSON.stringify(enData));
      fs.writeFileSync(`${__dirname}/newJson/du/${file}`, JSON.stringify(duData));
      console.log(`${file} 写入完成`);
    });
    fs.writeFileSync('./en_logs.txt', enLogs.join(''));
    fs.writeFileSync('./du_logs.txt', duLogs.join(''));
    console.log('所有翻译文件写入完成');
  })
}

function transStrs(zhObj, enObj, duObj, file) {
  for (const key in zhObj) {
    if (Object.hasOwnProperty.call(zhObj, key)) {
      const value = zhObj[key];
      if (Object.prototype.toString.call(value) === '[object Object]') {
        // 如果值是对象
        duObj[key] = {};
        transStrs(value, enObj[key], duObj[key]);
      } else {
        // 遍历拿到的所有翻译，找到对应的 item
        let flag = true;
        for (let i = 0; i < transData.length; i++) {
          if (value === transData[i].cn) {
            // 如果对应的英文翻译不同，则修改原来的翻译
            if (transData[i].en !== enObj[key]) {
              enLogs.push(`英文翻译文件 ${file} 被修改，key：${key}，修改前的值：${enObj[key]}，新的值：${transData[i].en}\n`);
              enObj[key] = transData[i].en;
            }
            // duLogs.push(`荷兰语翻译文件 ${file} key：${key} 被添加`);
            duObj[key] = transData[i].du;
            flag = false;
            break;
          }
        }
        // 如果没有找到对应的 item，翻译缺失
        if (flag) {
          if (!enObj[key]) {
            enObj[key] = '缺失';
            enLogs.push(`${value} 对应的英文翻译缺失\n`);
          }
          if (!duObj[key]) {
            duObj[key] = '缺失';
            duLogs.push(`${value} 对应的荷兰语翻译缺失\n`);
          }
        }
      }
    }
  }
}

// readZhFiles();
function writeJsFile() {
  fs.readdir(`${__dirname}/newJson`, (err, dirs) => {
    if (err) {
      console.log('error', err);
      return;
    }
    dirs.forEach(dir => {
      fs.readdir(`${__dirname}/newJson/${dir}`, (error, files) => {
        if (error) {
          console.log('error', err);
          return;
        }
        files.forEach(file => {
          const fileName = path.basename(file, '.json')
          console.log('f', fileName)
          const fileData = fs.readFileSync(`${__dirname}/newJson/${dir}/${file}`, 'utf-8');
          fs.writeFileSync(`${__dirname}/newJs/${dir}/${fileName}.js`, `export default ${fileData}`)
        })
      })
    })
    // console.log('files', files);
    console.log('写入完成')
  })
}
writeJsFile();