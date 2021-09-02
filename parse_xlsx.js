// 解析 excel
const xlsx = require('node-xlsx').default;
const fs = require('fs');

const langSheet = xlsx.parse(`${__dirname}/lang.xlsx`);
const webData = langSheet[2].data.slice(1);

const jsonData = [];
const keySet = new Set();
webData.forEach(item => {
  if (item[0]) {
    item[0] = item[0].trim().replace(/:/ig, '');
  }
  if (item[1]) {
    item[1] = item[1].trim();
  }
  if (item[2]) {
    item[2] = item[2].trim();
  }
  if (item[3]) {
    item[3] = item[3].trim();
  }
  if (!keySet.has(item[1])) {
    keySet.add(item[1]);
    jsonData.push({
      key: item[0],
      cn: item[1],
      en: item[2],
      du: item[3]
    });
  }
});

fs.writeFileSync('./lang.json', JSON.stringify(jsonData), 'utf-8');
console.log(jsonData.length);
console.log('写入完成');