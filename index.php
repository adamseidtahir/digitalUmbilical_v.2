<!-- PROBLEM -->
<!-- Det flickar till vitt i toppen när man scrollar snabbt -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Digital Umbilcal is a dance piece exploring the intimacy and connection between performer and audience.">
    <link rel="shortcut icon" href="img/logoMini.png" type="image/x-icon">
    <link rel="canonical" href="http://bodyintelligence.art/index.php" />
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,400,700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="./jQuery.js"></script>
    <title>Digital Umbilical - a piece by Body Intelligence Collective</title>
</head>

<body>

    <!-- These are fixed position on the page -->
    <div id = frame>
       <img id = "logo" src="img/logo.png" alt="A logo for Digital Umbilical" title="Our beautiful logo">
        <img id = "heartbeat" src="img/heartbeat.png" alt="A pulse line" title="The line of a pulse">
        
        <!-- Navigation -->
        <div id = leftNav>
            <h3></h3>
            <a class = "nav-item" href="#top">Top</a>
            <a class = "nav-item" href="#team">Team</a>
            <a class = "nav-item" href="#touring">Touring</a>
            <a class = "nav-item" href="#contact">Contact</a>
            <h3></h3>
        </div>

        <div id = rightNav>
            <h3></h3>
            <a class = "nav-item" href="#overview">Overview</a>
            <a class = "nav-item" href="#concept">Concept</a>
            <a class = "nav-item" href="#narrative">Narrative</a>
            <a class = "nav-item" href="#performance">Performance</a>
            <h3></h3>
        </div>

    </div>

    <!-- Arrow to guide you down -->
    <div id="top">
        <img id= "arrow" src="img/arrow.png" alt="Arrow down" title="Direction">
    </div>

    <!-- Trigger for animating the heartbeat, logo and arrow on scroll -->
    <div id="trigger1"></div>

    <!-- Quote block -->
    <div class="block" id="quo1">
        <h1 class = "quote" id = "headerQuote">We believe that Digital Umbilical is a poetic-technologic experience.</h1>
        <p class="quote" >
            By ‘listening’ to and sharing our bio data we are
            confronted with our human dimension. Reconnecting through our heartbeat and breath, we realize our
            ephemeral and unique presence in that very moment.</p>
    </div>

    <!-- Overview block -->
    <div class="block" id="overview">
        <div class= "imgroll">
            <img class = "images"  src="img/overview.jpg" alt="Two dancers leaning against eachother" title="Two dancers">
            <!-- The floating umbilicals -->
            <div class="bgUmbs">
                <div class= "lu2 leftUmbs"></div>
                <div class= "ru2 rightUmbs"></div>
            </div>

            <!-- This was the scrolling title, now it's static but still in a list... -->
            <div id='overRoll' class = 'roll'>
                <ul class='overTopics'>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    <li>OVERVIEW</li>
                    
                </ul>
            </div>

        </div>
        <p class="imgtext">Digital Umbilical is a dance performance exploring organic connection between
            individuals (dancer and audience member), and its amplification through the use of
            technology. <br> <br>
            Inspired by factors of intimacy: proximity, warmth, sensing the pulse of each other,
            quietness: we aim at creating a shared experience which is unique to the moment. Our
            strongest reference is the womb: a place of deep and intimacy with another human
            being, surrounding us in sound , low vibration and soft light, a place of interdependent
            living. <br> <br>
            Repurposing technological tools of bio-data control and measurement, Digital
            Umbilical wants to reclaim the poetic, rhythmic and creative aspect of bio-rhythms
            and body cycles, enabling audiences to reconnect to their bodies as spectators as well
            as participants. <br> <br>
            At a time where we are rising political division along simplified categorizations and
            artificial boundaries amongst humans, we believe it is critical to get audiences and
            participants to reconnect to the universality of our body , and an experience we have
            all shared as human beings. </p>
    </div>

    <!-- Concept block -->
    <div class="block" id="concept">
        <div class= "imgroll">
            <img class = "images"  src="img/concept.jpg" alt="Arduino on body" title="The heartbeat sensor and other tech">
            <!-- The floating umbilicals -->
            <div class="bgUmbs">
                <div class= "lu1 leftUmbs"></div>
                <div class= "ru1 rightUmbs"></div>
            </div>
            <!-- This was the scrolling title, now it's static but still in a list... -->
            <div id='conceptRoll' class = 'roll'>
                <ul class='conceptTopics'>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                    <li>CONCEPT</li>
                </ul>
            </div>

        </div>
        <p class="imgtext">We are creating a responsive
            interactive system where bio-data
            from both audience members and
            performers are fedback in real time
            and impact the soundscape and
            lighting environment. Audience can
            at times hear their own heartbeat as
            well as the performer’s live breath. <br><br>
            The performer’s behavior, his
            movement pattern and the
            atmosphere of the shared space
            (soundscape, lighting) adapt in real
            time to facilitate a climate of trust
            propice for an intimate encounter
            (soft, poetic, narrowing perception
            to one element) <br><br>
            This gives audiences a unique
            experience of dance and a rare
            insight into their own uncontrollable
            physiological reactions. </p>

        <img class = "images" src="img/circleDiagram.png" alt="Circle visualization" title="The data we captured from the audience">
    </div>

    <!-- Narrative block -->
    <div class="block" id="narrative">
        <div class= "imgroll">
            <img class = "images"  src="img/narrative.jpg" alt="Two dancers" title="Two dancers">
            <!-- The floating umbilicals -->
            <div class="bgUmbs">
                <div class= "lu2 leftUmbs"></div>
                <div class= "ru2 rightUmbs"></div>
            </div>
            <!-- This was the scrolling title, now it's static but still in a list... -->
            <div id='narrativeRoll' class = 'roll'>
                <ul class='narrativeTopics'>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                    <li>NARRATIVE</li>
                </ul>
            </div>

        </div>
        <p class="imgtext">The heartbeat is widely used as a poetic representation of life and love due in part to
            this facility for translation and the universal recognition of the rythmic sound we
            first hear in the womb, our mother’s heart. <br> <br>
            Both heartbeat and breath are a representation of our finity as humans: they are vital
            signs of us being alive. We do not control it yet it is constantly catching up with our
            motion and emotions. <br> <br>
            The audience and performers are the ‘womb’, an interconnected organism of
            rhythmic bodies, comforting, peaceful, self regulating. The performer is the ‘other’ as
            well as a mirror of ourself, he is the intermediate between us and the world. <br> <br>
            Exploring choreography and rhythm with two performers, we want to explore body
            reactions through different body sensitivities. We hope this to allow for better
            ‘connection’ and identification by having two human beings who inevitably are
            different and thus can connect better to different people. <br> <br>
            The performance aims at creating a feeling of expanding time through choreographic
            cycles, sensory perceptions , e.g create a feeling of having known performer(s) and
            audience for a day/year/life time.</p>
    </div>

    <!-- Performance block -->
    <div class="block" id="performance">
        <div class= "imgroll">
            <img class = "images"  src="img/performance.jpg" alt="Two dancers and two audience members" title="Two dancers in front of an audience">
            <!-- The floating umbilicals -->
            <div class="bgUmbs">
                <div class= "lu1 leftUmbs"></div>
                <div class= "ru1 rightUmbs"></div>
            </div>
            <!-- This was the scrolling title, now it's static but still in a list... -->
            <div id='performanceRoll' class = 'roll'>
                <ul class='performanceTopics'>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                    <li>PERFORMANCE</li>
                </ul>
            </div>

        </div>
        <p class="imgtext">Digital Umbilical is a performance for 1 to 2 dancers, 5 to 10 connected participants
            and X number of ‘spectators’ participants (30 to 50 tbc). <br> <br>
            Participants are picking their tickets at the entrance, and get ‘selected’ in being a
            connected participant (emphasize on the uniqueness of the moment.)
            Connected participants are in the ‘womb’ with the performer(s), in a intimate and
            soft environment, having unique interactions. Spectators are ‘hidden’ and have a
            special and unique vision of the show. <br><br>
            The set up allows for moments of connected experiences when we are all
            experiencing a common event and moments of disconnect when we are allowed to
            reflect on our singularity and difference to the others . <br><br>
            We set to explore the amplification a body movement shared by all humans, and
            amplify the kinetic empathy to the performer and the presence and consciousness of
            our own body. The notion of presence will be amplified through repetition or
            mimetism , for the movement to remain in the audience memory even after it has
            been performed. Finally, the closeness to the audience suppose a different approach
            to movement making, looking at details and refined textures.</p>

    </div>

    <!-- Team block -->
    <div class="block" id="team">
        <div class= "imgroll">
            <img class = "images"  src="img/team.jpg" alt="Arduino on body" title="The tech on Adam's chest">
            <!-- The floating umbilicals -->
            <div class="bgUmbs">
                <div class= "lu3 leftUmbs"></div>
                <div class= "ru3 rightUmbs"></div>
            </div>
            <!-- This was the scrolling title, now it's static but still in a list... -->
            <div id='teamRoll' class = 'roll'>
                <ul class='teamTopics'>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                    <li>TEAM</li>
                   
                </ul>
            </div>

        </div>
        <div class="bio">
            <div class = bio-card>
                <img class = "headshot" src="img/adam.png" alt="Headshot of Adam" title="Adam Seid Tahir">
                <h4 class = "name">Adam Seid Tahir</h4>
                <h5 class = "profession">Performer</h5>
                <p>Adam studied contemporary dance at The
                    Royal Swedish Ballet
                    School (2012-2015) and
                    the Ballet Junior de
                    Geneve (2015-2018). In
                    2015 he did a project at
                    The Gothenburg Opera's
                    Dance Company, in 2017
                    he participated in a R&D
                    with Michael Keegan
                    Dolan and in 2018 he
                    worked with The Waldorf
                    Project.</p>
            </div>

            <div class = bio-card>
                <img class = "headshot" src="img/salome.png" alt="Headshot of Salome" title="Salome Bazin">
                <h4 class = "name">Salomé Bazin</h4>
                <h5 class = "profession">Designer</h5>
                <p>Salomé is a designer and
                    artist, founder of Cellule,
                    design studio working
                    accross art, science, and
                    technology. She has
                    worked with surgeons
                    developping a set for
                    cardiology training,
                    developed a 3d printed
                    wheelchair, and now
                    partner with computer
                    scientists and scholars in
                    network intelligence.</p>
            </div>

            <div class = bio-card>
                <img class = "headshot" src="img/Renaud.png" alt="Headshot of Renaud" title="Renaud Wiser">
                <h4 class = "name">Renaud Wiser</h4>
                <h5 class = "profession">Choreographer</h5>
                <p>Renaud is a Swiss born
                    and London based
                    independent
                    choreographer. A former
                    dance artists with the
                    Gothenburg ballet and
                    Rambert, he is a foundermember of New
                    Movement Collective and
                    has recently been
                    appointed artistic codirector of Newcastle
                    based dance company
                    Fertile Ground.</p>
            </div>

            <div class = bio-card>
                <img class = "headshot" src="img/jon.png" alt="Headshot of Jon" title="Jon Rowe">
                <h4 class = "name">Jon Rowe</h4>
                <h5 class = "profession">Programmer</h5>
                <p>Jon Rowe is an artist and
                    software developer who
                    has been creating
                    pioneering synthetic
                    realities for 20 years.
                    Working first with film and
                    projection he hacked
                    together a primitive mixed
                    reality headset in the
                    1990s and has since
                    been creating virtual
                    worlds for many high
                    profile clients.</p>
            </div>

            <div class = bio-card>
                <img class = "headshot" src="img/lara.png" alt="Headshot of Lara" title="Lara Buffard">
                <h4 class = "name">Lara Buffard</h4>
                <h5 class = "profession">Producer</h5>
                <p>Lara Buffard, graduated
                    in Museology and in
                    Advanced Studies in
                    Theatre, Performance and
                    Contemporary Live
                    Arts.She worked 10 years
                    as Cultural project
                    Coordinator at MUDAC
                    (Museum of Contemporary design and Applied
                    arts/CH).Today she works
                    as a performance artist
                    and producer.</p>
            </div>

            <div class = bio-card>
                <img class = "headshot" src="img/simon.png" alt="Headshot of Simon" title="Simon Haenggi">
                <h4 class = "name">Simon Haenggi</h4>
                <h5 class = "profession">Creative technologist</h5>
                <p>Simon is a London-based
                    digital artist/creator and
                    co-founder of the art &
                    design studio Visualpilots.
                    With 10+ years of
                    experience he focuses on
                    the exploration and
                    modification of space
                    using technology,
                    creating installations that
                    take the visitor onto
                    contemplative journeys.</p>
            </div>

            <div class = bio-card>
                <img class = "headshot" src="img/arthur.png" alt="Headshot of Arthur" title="Arthur Astier">
                <h4 class = "name">Arthur Astier</h4>
                <h5 class = "profession">Musician</h5>
                <p>A french composer and musician, Arthur
                    explores different styles
                    of expressions. He
                    has worked alongside
                    international artists such
                    as Christian Boltanski,
                    Franck Krawczyk, Peter
                    Brook.In recent year
                    Arthur composed for
                    Singapore Repertory
                    Theatre and devised with
                    Master students from
                    Goldsmiths...</p>
            </div>

            <div class = bio-card>
                <img class = "headshot" src="img/rosanne.jpg" alt="Headshot of Rosanne" title="Rosanne Briens">
                <h4 class = "name">Rosanne Briens</h4>
                <h5 class = "profession">Performer</h5>
                <p>Rosanne studied ballet, contemporary and jazz 
                    dance at the conservatoire of Rouen before joining 
                    Ballet Junior de Genève (2012-2015). She ca-funded 
                    the collective Junebug company in 2015 with whom she 
                    worked until 2018 while freelancing in Europe. 
                </p>
            </div>

        </div>
    </div>


    <!-- Touring block -->
    <div class="block" id="touring">
        <div class= "imgroll">
            <img class = "images"  src="img/touring.jpg" alt="Arduino with wires" title="The tech on the floor">
            <!-- The floating umbilicals -->
            <div class="bgUmbs">
                <div class= "lu1 leftUmbs"></div>
                <div class= "ru1 rightUmbs"></div>
            </div>
            <!-- This was the scrolling title, now it's static but still in a list... -->
            <div id='touringRoll' class = 'roll'>
                <ul class='touringTopics'>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>
                    <li>TOURING</li>

                </ul>
            </div>

        </div>
        <div id="contact-container">
            <h5>Upcoming</h5>
            <ul>
                <li>
                    <!-- <a href="https://theatredeliege.be/evenement/dansathon/" target="_blank">19th November, Theatre de Liege, Liege (Belgium)</a> -->
                    19th November, Theatre de Liege, Liege (Belgium)
                </li>
            </ul>
            <h5>Previous tours</h5>
            <ul>
                <li>
                    <!-- <a href="www.sadlerswells.com" target="_blank">11th October, Sadler's Wells London (England)</a> -->
                    11th October, Sadler's Wells London (England)
                </li>
                <li>
                    <!-- <a href="http://www.maisondeladanse.com/programmation/saison2019-2020/projets-recompenses" target="_blank">19th October, Maison de la Danse Lyon (France)</a> -->
                    19th October, Maison de la Danse Lyon (France)
                </li>
                
            </ul>
        </div>
    </div>


    <!-- Contact block -->
    <div class="block" id="contact">
        <div class= "imgroll">
            <img class = "images"  src="img/contact.jpg" alt="Arduino with wires" title="More tech">
            <!-- The floating umbilicals -->
            <div class="bgUmbs">
                <div class= "lu1 leftUmbs"></div>
                <div class= "ru1 rightUmbs"></div>
            </div>
            <!-- This was the scrolling title, now it's static but still in a list... -->
            <div id='contactRoll' class = 'roll'>
                <ul class='contactTopics'>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                    <li>CONTACT</li>
                   
                </ul>
            </div>

        </div>
        <div id="contact-container">
            <h5>Email us</h5>
            <a href="mailto:info@bodyinteligence.art">info@bodyinteligence.art</a>
            <h5>Supported by</h5>
            <div id="sponsImgRow">
                <img class= "sponsorImg" src="img/sws.svg" alt="Sainsbury's welcome Centre" title="Sainsbury's welcome Centre">
                <img class= "sponsorImg" src="img/sw.svg" alt="Sadler's Wells" title="Sadler's Wells">
                <img class= "sponsorImg" src="img/bnp.png" alt="BNP Paribas" title="BNP Paribas">
                <img class= "sponsorImg" src="img/ace.png" alt="Arts council England" title="Arts council England">
            </div>
        </div>
    </div>


    <footer>
        <p>Made by <a href="https://www.linkedin.com/in/adam-seid-tahir-1b3ba515a/" target="_blank">Adam Seid Tahir</a></p>
    </footer>


    <script src="./script.js"></script>
</body>
</html>