const readline = require("readline");
 const rl = readline.createInterface({
 input: process.stdin,
  output: process.stdout
 });
 const exec = require('child_process').exec;
 exec(`curl https://animechan.vercel.app/api/random`, (err, stdout, stderr) => {
 if (err) {
 console.error(err);
 return;
  console.log('Error..')
 }
ren = JSON.parse(stdout);
 console.log("Anime:"+ren.anime+"\n\nCharachter: "+ ren.character+"\n\nQuote:"+ren.quote);
      rl.close();
     });
rl.on("close", function() {
console.log('\nMy Telegram: @renlowsphere');
     process.exit(0);
});
