<?php

?>
<main>

<div class="info-panel">
    <div class="row">
        <p>What is osrs calc and how can you use it to improve your gaming experience?</p>
        <p>OSRS Calculator works in a very simple manner, you input your stats in the first box either manually or by researching you IGN (in game name). Once that's done the only other thing you need to do it head over the the bottom of the page where you can then select either "Set1" or "Set2". The reason there are two of these is so that you are able to compare the dps between two different sets of armor you that you don't have to delete the previous one. It also makes it easier to read and truly see the difference between both</p>
        <p>So how can you make a set? Well, it's actually very simple. All you need to do is select the different slots (eg. Helm, Offhand, Boots) and then search up which item you would like to use in the long list that is available to you. Onc you've geared your character with the items you desire, the website will calulate in real time your max hit as well as your DPS (damage per second) of both sets. Lastly if you'd like to login to the website in order to create and save presets for the futur you can easily do so by clicking the "Login" or "Signup" button at the top right of the website.</p>
    </div>
</div>
<div class="calc">
    <div class="row">
                <div class="player-box col-6">
            <div class="row player-search">
                <!-- <form action="#" class="d-flex g-2"> -->
                    <div class="mb-3 col-md-3">
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary" id="player-search">Search</button>
                    </div>
                <!-- </form> -->
            </div>
            <div class="row player-info g-0">
                <div class="col-3 g-0 ps-4 pt-4">
                    <div class="row stat-row">
                        <div class="stats-line d-flex justify-content-start align-middle">
                            <div class="image-container pe-2">
                                <img class="image-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAAiklEQVR42mNgoAlg/I+KaWBBaXUNHNPAElQLaGAJpgVUtmTUglELhpQFoTFRoxbgt8DNRp9SC9CLZgimogUQS6qyOf9vWc0GxyA+FS1AWALD6BZRKQ4QQYTNIqpGMgiDggfZIipagrAAhpGDj2pBhWwBetBRxRKQQegWUN0S1LCHGUjVZg3N20gMAD2PUHv/QZtgAAAAAElFTkSuQmCC" alt="stat icon" id="stat-icon">
                            </div>
                            <label for="stat-icon" class="pe-2  stat-label">Attack</label>
                            <input type="text" class="stat-value">
                        </div>
                    </div>
                    <div class="row stat-row">
                        <div class="stats-line d-flex justify-content-start">
                            <div class="image-container pe-2">
                                <img class="image-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAUCAYAAACEYr13AAAAf0lEQVR42uWSyw3AMAhDk4m6QM8dqRN1kU7Wqj8FkO2Ec5E4IMUPQygFRj1apuMR7tt6ZxLmxVcu8xRgQhxFVvzVBII7IwBx4sUIYmHBSYVC5sTWL0RbVzAIiI9jkh/hELaP1CLF/EVCkHV/nR0AcpG6yM72c4AB+3qMwe6/BJyjref0spE1hQAAAABJRU5ErkJggg==" alt="stat icon">
                            </div>
                            <label for="stat-icon" class="pe-2  stat-label">Strength</label>
                            <input type="text" class="stat-value">
                        </div>
                    </div>
                    <div class="row stat-row">
                        <div class="stats-line d-flex justify-content-start">
                            <div class="image-container pe-2">
                                <img class="image-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAATCAYAAAB2pebxAAAAWUlEQVR42mNgYGD8TzkGEqExURi4tLoGA0+aNRUD4zQEmwG4DCJoCLKTR6ohpETrEDBkNIphhjBgGESsIUgGMGAYREwGxGIAcQYRYQB+g0gwAGEQnlIMAwAAiPsapF3s6TEAAAAASUVORK5CYII=" alt="stat icon">
                            </div>
                            <label for="stat-icon" class="pe-2  stat-label">Defence</label>
                            <input type="text" class="stat-value">
                        </div>
                    </div>
                    <div class="row stat-row">
                        <div class="stats-line d-flex justify-content-start">
                            <div class="image-container pe-2">
                                <img class="image-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAA30lEQVR42s2VQRLCIAxFE3c9g4dw5dIbuXWj3h0nMjQUfkhoXcgMo1PhPUw+U6Lv4ERwyHM0w4PT87Y0G/N3eY4mlsADcLfRgmIJdZxGHDmlTuv3x+uN4CrYLrD/fguXfU5f8iJdOO5TgV8v52ijIwKFK5h/JeD1xOMm7xJoKfwUTQkYlAI1OXjJaoHdvIMCPxU74QKeSdEAvq1lXWMvRQ6c03I/rbMvhSVwa96D5RNFEaVoEEcMxnAkcE5d17gWjRpYBMFLlAU+GAsCEeQgmChQbyuKNP26nLxAfyYo4A/q/Ie/nWUnXQAAAABJRU5ErkJggg==" alt="stat icon">
                            </div>
                            <label for="stat-icon" class="pe-2  stat-label">Range</label>
                            <input type="text" class="stat-value">
                        </div>
                    </div>
                </div>
                <div class="col-4 g-0 pt-4">
                    <div class="row stat-row">
                        <div class="stats-line d-flex justify-content-start">
                            <div class="image-container pe-2">
                                <img class="image-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAXCAYAAAD+4+QTAAAAvElEQVR42rWWyw2AIBBE4UJiDdZiY5ZhG16tTw0YDLgfEAaSuck896vGVB175YKexNidj0ZAZrcFvRAs6IkgQjIQLm0CABcNjYIAERAJkEOaQXoUtDYggNgErZCSOSBlFDIgZd/1YUfV5WcD9HaZBgBsgHIUKWhdpg+I3di0Fv6iZn7sLsg/F6Vs7fytU4ikaJ5CXkN+x5XTwkGi2OXZAqkqvghg0tVlqn8OLA4g/w+UJ7xuTqrmxV7tks8NJtUcpr548JAAAAAASUVORK5CYII=" alt="stat icon">
                            </div>
                            <label for="stat-icon" class="pe-2  stat-label">Magic</label>
                            <input type="text" class="stat-value">
                        </div>
                    </div>
                    <div class="row stat-row">
                        <div class="stats-line d-flex justify-content-start">
                            <div class="image-container pe-2">
                                <img class="image-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAUCAYAAABmvqYOAAAAiUlEQVR42mNggAPG/7gxNkC0eojgXX9MjKkJwa+y5cTAWCzAbjAuSzZbMsMxbgsIuBofxmcBkutJNxjdcNwWkGk4ca6nwHBkC0YNJ81waqQYPBkJoZB6hqNlf1IsINLVpFtAosHYLcBmCZkG47YAGybDYOIsoMBgVAtghlDRYOwWUNFgcqs/BAAA1OSXIOPLLjcAAAAASUVORK5CYII=" alt="stat icon">
                            </div>
                            <label for="stat-icon" class="pe-2  stat-label">Hitpoints</label>
                            <input type="text" class="stat-value">
                        </div>
                    </div>
                    <div class="row stat-row">
                        <div class="stats-line d-flex justify-content-start">
                            <div class="image-container pe-2">
                                <img class="image-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAAmklEQVR42u2VMQ6AIAxF6f03ExcP4uAdnJ09gUeoQVIRoQjSDiaS/I2+R0qgxlQtQKOzANdtQSXBN+GAIVxUANgN/QEf50kS7sBXuKBABe56S+A73AuqJDGUgxdKAHNQAlNSglByiiAoLAkHt6E9gYDyVJQDJ06eblEOYkPtarpYDvwSGkv4Fgg8IkV4LBD/uBThXvBPoubpvwPke82osh0B+gAAAABJRU5ErkJggg==" alt="stat icon">
                            </div>
                            <label for="stat-icon" class="pe-2  stat-label">Prayer</label>
                            <input type="text" class="stat-value">
                        </div>
                    </div>
                    <div class="row stat-row">
                        <div class="stats-line d-flex justify-content-start">
                            <div class="image-container pe-2">
                                <img class="image-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXAgMAAACdRDwzAAAADFBMVEUAAAAAAAF1e3xGPC/Lr9t+AAAAAXRSTlMAQObYZgAAAHdJREFUeF4lyyEOwjAcRvH3mdYiwNRwlf8RJmCOYDCbR5JdoQI0hoSsp+lhakloO/UTLw90NkBjeh4Ml9J6HQivMb0zk2n+Zm4Q1oEdNRvAcWOZI6BfaPjiPi3lDVPjTkO5461zAUVUOr7iYr06i0EwHsAEJ2DPH6zjISwi8knTAAAAAElFTkSuQmCC" alt="stat icon">
                            </div>
                            <label for="stat-icon" class="pe-2  stat-label">Mining</label>
                            <input type="text" class="stat-value">
                        </div>
                    </div>
                </div>
                <div class="col g-0">
                    <p>BOOSTS</p>
                    <input type="text">
                </div>
            </div>
        </div>  
    </div>
    <div class="row">
        <div class="imgxd col-4">
            <img src="../assets/img/Equipment_Stats_interface.png" alt="">
        </div>
        <div class="imgxd col-4">
            <img src="../assets/img/Equipment_Stats_interface.png" alt="">
        </div>
        <div class="imgxd col-4">
            <img src="../assets/img/Equipment_Stats_interface.png" alt="">
        </div>
    </div>

</div>

</main>