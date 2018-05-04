<?php
    require_once('includes/header.php');
?>


    <div id="imageSpectacle">
        <div id="navigationSpectacle" class="navigation">
            <div class="nav-box previous"><a href="spectacle.php" rel="prev"><span>previous show</span></a></div>
            <div class="nav-box next"><a href="spectacle.php" rel="next"><span>next show</span></a></div>
        </div>
    </div>
    <div id="containerSpectacle" class="container">
        <h1>The legend of King Arthur</h1>
        <div class="row">
            <div class="col-sm-5 col-md-4 col-lg-3">
                <img src="img/roi-soleil.jpg">
            </div>
            <div class="paragrapheIntroSpectacle col-sm-7 col-md-8 col-lg-9">

                <p style="color:white;font-size:20px">Legend of King Arthur is one of the most beautiful love stories that tradition and literature have passed on to us, like Tristan and Isolde or Romeo and Juliet.</p>
                <p><span style="color:white">It is perhaps even richer because it tells us about two passions that mingle and refute each other:</span><br>Arthur and Guinevere and Lancelot. A legendary king, a beautiful, wilful queen, and the bravest of knights.<br>Loves that cross a magical universe where fairies become sorceresses, like Morgan, Arthur's stepsisiter, and where Merlin the magician speaks to spirits and dragons.</p>
                <p>The men who created this legend once upon a time, avoided giving it a real beginning or a definitive ending. Thus, they could dream and travel in a fantasy world, continually renewing it. And it is on journey that we wish to invite you. At the end of our story, Arthur, the little groom whoe became king, will rise above his suffering to forgive the two people whom, despite their having betrayed him, he loves most in the world...</p>
            </div>
        </div>
        <div id="gallery">
            <img src="imgRoiArthur/%C2%A9AnthonyGhnassia-31.jpg">
            <button class="button" type="button" data-toggle="modal" data-target="#myModal">VIEW ALL GALLERY</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="container" id="containerModal">
                        <div class="head">
                            <p>The legend of King Arthur</p>
                            <button type="button" class="close" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><path d="M0,126c0,-69.58788 56.41212,-126 126,-126c69.58788,0 126,56.41212 126,126c0,69.58788 -56.41212,126 -126,126c-69.58788,0 -126,-56.41212 -126,-126zM126,236.88c61.23733,0 110.88,-49.64267 110.88,-110.88c0,-61.23733 -49.64267,-110.88 -110.88,-110.88c-61.23733,0 -110.88,49.64267 -110.88,110.88c0,61.23733 49.64267,110.88 110.88,110.88z" fill="#ffffff"></path><g fill="#ffffff"><g id="surface1"><path d="M132.3,142.46515l-48.20164,48.20164l-16.46515,-16.46515l48.20165,-48.20164l-48.20165,-48.20164l16.46515,-16.46515l48.20164,48.20165l48.20164,-48.20165l16.46515,16.46515l-48.20164,48.20164l48.20164,48.20164l-16.46515,16.46515z"></path><path d="M180.50164,64.13942l13.65894,13.65894l-48.20165,48.20164l48.20165,48.20164l-13.65894,13.65894l-48.20164,-48.20165l-48.20164,48.20165l-13.65894,-13.65894l48.20164,-48.20164l-48.20164,-48.20164l13.65894,-13.65894l48.20164,48.20164l48.20164,-48.20164M180.50164,58.527l-48.20164,48.20164l-48.20164,-48.20164l-19.27136,19.27136l48.20164,48.20164l-48.20164,48.20164l19.27136,19.27136l48.20164,-48.20164l48.20164,48.20164l19.27136,-19.27136l-48.20164,-48.20164l48.20164,-48.20164z"></path></g></g><path d="M126,252c-69.58788,0 -126,-56.41212 -126,-126v0c0,-69.58788 56.41212,-126 126,-126v0c69.58788,0 126,56.41212 126,126v0c0,69.58788 -56.41212,126 -126,126z" fill="none"></path><path d="M126,236.88c-61.23733,0 -110.88,-49.64267 -110.88,-110.88v0c0,-61.23733 49.64267,-110.88 110.88,-110.88v0c61.23733,0 110.88,49.64267 110.88,110.88v0c0,61.23733 -49.64267,110.88 -110.88,110.88z" fill="none"></path></g></svg></button>
                        </div>
                        <div class="modal-body">
                            <div id="my_carousel" class="carousel slide">
                                <!-- Slides -->
                                <div class="carousel-inner">
                                    <!-- Page 1 -->
                                    <div class="item active" data-slide-to="0">
                                        <div class="carousel-page">
                                            <img src="imgRoiArthur/%C2%A9AnthonyGhnassia-11.jpg"/>
                                        </div>
                                    </div>
                                    <!-- Page 2 -->
                                    <div class="item" data-slide-to="1">
                                        <div class="carousel-page">
                                            <img src="imgRoiArthur/%C2%A9AnthonyGhnassia-122.jpg" />
                                        </div>
                                    </div>
                                    <!-- Page 3 -->
                                    <div class="item" data-slide-to="2">
                                        <div class="carousel-page">
                                            <img src="imgRoiArthur/%C2%A9AnthonyGhnassia-146.jpg" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Contrôles -->
                                <a class="left carousel-control" href="#my_carousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#my_carousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>   
                        </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <a href="images/image1.jpg" class="thumbnail" data-gallery="gallery1">
                             <img src="imgRoiArthur/%C2%A9AnthonyGhnassia-11.jpg" />
                        </a>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <a href="images/image2.jpg" class="thumbnail" data-gallery="gallery1">
                            <img src="imgRoiArthur/%C2%A9AnthonyGhnassia-122.jpg">
                        </a>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <a href="images/image3.jpg" class="thumbnail" data-gallery="gallery2">
                            <img src="imgRoiArthur/%C2%A9AnthonyGhnassia-146.jpg" >
                        </a>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <a href="images/image1.jpg" class="thumbnail" data-gallery="gallery1">
                          <img src="imgRoiArthur/%C2%A9AnthonyGhnassia-11.jpg" />
                        </a>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <a href="images/image2.jpg" class="thumbnail" data-gallery="gallery1">
                            <img src="imgRoiArthur/%C2%A9AnthonyGhnassia-122.jpg">
                        </a>
                    </div>        
                    <div class="col-md-2 col-lg-2">
                        <a href="images/image3.jpg" class="thumbnail" data-gallery="gallery2">
                            <img src="imgRoiArthur/%C2%A9AnthonyGhnassia-146.jpg" >
                        </a>
                    </div>               
                </div>                    
            </div>
        </div>
        <div class="paragrapheSpectacle2">
            <h2>The Story</h2>
            <hr width="10%">
            <div class="row">

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <p>The legend of King Arthur Performed by fifty artists will celebrate on September 2015 its world premiere in Paris, The legend of King Arthur is one of the most beautiful love stories that tradition and literature have passed on to us, like Tristan and Isolde or Romeo and Juliet. It is perhaps even richer because it tells us about two passions that mingle and refute each other: Arthur and Guinevere and Guinevere and Lancelot. A legendary king, a beautiful, wilful queen, and the bravest of knights. Loves that cross a magical universe where fairies become sorceresses, like Morgan, Arthur's stepsister, and where Merlin the magician speaks to spirits and dragons. <br> The men who created this legend once upon a time, avoided giving it a real beginning or a definitive ending. Thus, they could dream and travel in a fantasy world, continually renewing it. And it is on a journey that we wish to invite you. At the end of our story, Arthur, the little groom who became king, will rise above his suffering to forgive the two people whom, despite their having betrayed him, he loves most in the world...<br> There was a time when the king of Britain (made up of today's Great Britain and the tip of French Brittany), Uther Pendragon, reigned over a prosperous, peaceful realm. But one day, he was seized by a sudden passion for the spouse of one of his lords. <br> His illustrious counsellor Merlin tried to dissuade him, but given the king's obstinacy, he ended up giving in and used his magic to help Uther possess the woman he desired more than anything in the world. But in exchange, Merlin demanded that the king entrust him with the fruit of their union, and nine months later, a boy was born and </p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <p>As promised, King Uther turned Arthur over to Merlin, who left the child in the care of an honest tradesman so that Arthur might be brought up in a family and receive an education.<br> After his abuse of authority, Uther fell in battle. But before dying, he stuck his sword in a rock and swore that only his successor would be capable of extracting Excalibur, the sword of kings.<br> Since then, the Kingdom of Britain has been torn by fratricidal wars and attacks on the borders by the Saxons.<br> The Show begins the day Merlin brings the people together to designate the new king who will at last unify and pacify the Kingdom of Britain. As King Uther had predicted, the Chosen One will be he who succeeds in pulling Excalibur out of the rock.<br> All the lords of the kingdom pass before the rock without success. It is then decided to organize a tournament in hopes that God will help the victor to pull out Excalibur.<br> At the time, Arthur is a young groom in the service of his adoptive brother who has just been dubbed a knight. He hurries to prepare his brother's equipage when he realizes his sword has disappeared. Having no other choice and unaware of the reason for this gathering, Arthur decides to borrow the sword stuck in the rock. This will not be a theft, just a loan, and he will return it to its place after the tournament.<br> He approaches the rock and… succeeds in pulling Excalibur out without the slightest effort. The rumblings of the crowd rise, and the gathering approaches the boy who is going to be designated the new king of Britain.
                    </p>
                </div>
            </div>
        </div>

        <div class="paragrapheSpectacle3">
            <h2>CHARACTERES & CAST</h2>
            <hr width="10%">
            <div class="row">
                <ul class="col-md-6">
                    <li>
                        <h3>King Arthur </h3>
                        <p>The young Arthur is a simple groom in service to his foster-brother who was dubbed. His destiny changes dramatically the day he misplaces his brother's sword and decides to borrow a sword stuck in a rock. At the time, he does not know he has just pulled out Excalibur, the Sword of Kings, which, according to legend, makes him king of Britain. Before the opposition of the lords who refuse to pledge allegiance to a groom, Merlin reveals Arthur's origins. He is the fruit of the illegitimate union between King Uther Pendragon and the Duchess of Cornwall. Arthur becomes a just king, loyal, valiant and devoted to his people. But love is going to change the course of history. Arthur falls in love with Guinevere and marries her despite Merlin's warnings. This love will change his destiny and that of his kingdom.</p>
                    </li>
                    <li>
                        <h3>Florent Mothe</h3>
                        <p>When one hears Florent Mothe's songs today, it is hard to imagine that he began music with the flute at the age of seven. He went on to study the bass and piano at the conservatory, doubtless realizing that the flute represented an obstacle between him and the audience, to which he intended making his voice heard.<br> The relative successes of the rock groups that he started as a teenager pushed him to exile himself to Toronto (Canada) to see if, by chance, the grass might not be greener under the snow. It was destiny that would make him return to France. Contacted on Myspace to audition for Mozart l’Opéra Rock, he became Salieri.<br> 350 performances later and two NRJ Music Awards* under his belt, he decided to reveal a more personal universe in his first solo album, Rock In Chair.<br> In the summer of 2014, Dove Attia offered Florent the title role in his new musical The Legend of King Arthur, which had everything to appeal: a great story, a great spectacle, great songs and a large tour. At the same time, Florent was preparing his next solo album and a series of concerts across France.</p>
                    </li>
                </ul>
                <ul class="col-md-6">
                    <li>
                        <h3>Morgan Le Fay</h3>
                        <p>Morgan is barely five when she sees Uther Pendragon, king of Britain, enter the family home and abuse her mother by taking on her father's appearance. But Morgan already has gifts of clairvoyance and immediately understands the trickery fomented by Merlin the enchanter to transform Uther with her father's appearance. The young sorceress grows up hating Uther and his descendant, her half-brother Arthur, who is the fruit of this illegitimate relation. She moves to Camelot to get closer to Arthur.<br> One evening, she takes on the appearance of Guinevere to abuse Arthur and getting him to make love to her. Morgan thus becomes pregnant by her half-brother and will constantly try to destroy the relationship between Arthur and Guinevere to prevent there being any heir to the throne other than the son she is carrying.</p>
                    </li>
                    <li>
                        <h3>Zaho</h3>
                        <p>From her birth in Algeria, where she lived until the age of 18, Zaho has been able to measure the difficulty of having dreams and an artistic sensibility. Enrolled in music classes by her father, she learned the guitar when she was seven; at ten, she was already reprising Francis Cabrel's repertoire. Zaho opened herself to new worlds thanks to music: those of Idir and Tracy Chapman.<br> Destiny's nudge came in 1999, when she emigrated with her family to Canada. 'Given that I was isolated, I wondered what the dream of my life really was. And I understood that it was to sing.' Zaho met producers, discovered the world of studios, began placing her voice on a few refrains, and imposed her first 'featurings'. Quite quickly, she put her studies on hold and devoted herself full time to music.<br> Her first album, DIMA, was released in 2008, a magnificent success selling nearly 200,000 copies and containing the titles 'C’est chelou', 'La roue tourne' and 'Je te promets'. This album earned her various prizes, awards and nominations, including 'Best French-speaking Artist' at the MTV Europe Music Awards, 'French Revelation of the Year' and 'Best Duo' at the NRJ Music Awards. to its place after the tournament.<br> He approaches the rock and… succeeds in pulling Excalibur out without the slightest effort. The rumblings of the crowd rise, and the gathering approaches the boy who is going to be designated the new king of Britain.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    require_once('includes/footer.php');
?>
