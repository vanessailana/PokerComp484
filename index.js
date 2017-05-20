function createPack() {  
  var suits = new Array("H", "C", "S", "D");
  var pack = new Array();
  var n = 52;
  var index = n / suits.length;

  var count = 0;
  for(i = 0; i <= 3; i++)
      for(j = 1; j <= index; j++)
          pack[count++] = j + suits[i];

  return pack;
}

function shufflePack(pack) {  
  var i = pack.length, j, tempi, tempj;
  if (i === 0) return false;
  while (--i) {
     j = Math.floor(Math.random() * (i + 1));
     tempi = pack[i];
     tempj = pack[j];
     pack[i] = tempj;
     pack[j] = tempi;
   }
  return pack;
}


exports.createPack = createPack;  
exports.shufflePack = shufflePack;  
exports.draw = draw;  
exports.playCard = playCard;  