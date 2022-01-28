// const Hiscores = require('osrs-hiscores').default;
import Hiscores from 'osrs-hiscores';


function getGuy() {
    const hiscores = new Hiscores({ timeout: 6000 }); // provide config if needed

    hiscores
      .getStats('zezima')
      .then(res => console.log(res))
      .catch(err => console.error(err));
}

document.getElementById("player-search").addEventListener("click", getGuy());
