<?php include('header.php'); ?>

        <div class = "container">
                     <div class = "row">
                   
                        <div class = "col-lg-9">
                       
                            <div class = "panel panel-default">
                           
                                <div class = "panel-body">
                                   
                                    <div class = "page-header">
                                        <h1>How to use the products</h1>
                                    </div>
                                <h1>About</h1>

<p>At Insta-site you find two different web applications that both is about displaying content from Instagram. You don't need to register an account at Insta-site, nor do you even need a Instagram account to use the applications.</p>

<h2>Gallery</h2>

<p>The Gallery is the feature-richest application at Insta-site. But at the same time it's really easy to use. You simply search for Instagram-photos by their hashtags. Lets say you want to view pictures of pugs. You then simply input 'pugs' in the search-field and click the search-button. 30 pictures that Instagrams users have tagged with the word 'pugs' then is displayed for your viewing. You can click the pictures to view a larger version of that picutres or maybe you want to search for something else, say cats instead?   <br/>
The gallery is mobile-friendly so you can easily search for pictures with Insta-site on your smartphone or tablet.</p>

<h2>Slideshow</h2>

<p>The slideshow is even more easier to use than the gallery and require less user-input. Simply click either one of the circles to navigate left and right in the slideshow. This web application pre-fetches pictures by a centain tag and you cannot change that tag unless you want to get your hands diry and change the underlaying code.     <br/>
As of now the slideshow is not fully optimized for smaller screens, such as smartphones or tablets.</p>

<h2>Competition</h2>

<p>If you do a quick google-search for 'instagram feeds' and other keywords you will find other web applications like Insta-site. Most of what you'll find is applications that is more feature-rich than what we offer. But Insta-site and it's web applications was built with simplicity in mind and we wanted to keep our applications light-weight and really easy to use. If you want to have a really feature-rich web application that uses the Instagram API you have to have a Instagram account yourself to be able to use all the features that is offered by the web application.</p>

<p>For instance, <a href="http://pinsta.me/" title="Pinsta.me">Pinsta</a> or <a href="http://iconosquare.com" title="Iconosquare.com">IconoSquare</a> offer more features than Insta-site but both require you to login with a Instagram account to fully use their applications.    <br/>
On the other hand, <a href="vsmaster.com" title="VSmaster.com">VSMaster.com</a> offer two different applications. <a href="logingram.com" title="LoginGram.com">LoginGram</a> require you to login with a Instagram acount to even access the site and use it and then there is <a href="findgram.com" title="Findgram.com">FindGram</a> that doesn't require a Instagram account. LoginGram is more feature rich than Findgram because in order to mimic all the functionality you get with the official Instagram applications the web application need to access a Instagram account.</p>

<p>As a version 2.0 of Insta-site, to primarily make the searchable gallery more feature-rich, we would have to require our users to login with a Instagram account to let them like pictures or comment on pictures. The ability to search for other Instagram users and not just hashtags could also make the application more feature-rich. That feature however does not require login like the ability to comment or like pictures.</p>

<h2>Configuration</h2>

<p>Insta-site if available on GitHub, click the button named 'GitHub' in the footer and you will be taken to the code of this site and its applications.</p>

<p>If you want to use the web applications on your own site it is recommended that you take a look at <a href="http://instagram.com/developer/" title="Instagram developer">The Instagram developer site</a> and follow the inscructions there to set up your own client and get your own client id. You then change the client id in search.js and slideshow.js like this:</p>

<pre><code>feed = new InstagramFeed({
                clientId: 'my-client-id' (change to your own id)
</code></pre>

<p>If you want to configure the slideshow to display pictures connected to another tag you simply modify the file slideshow.js in the javascript folder like this:</p>

<pre><code>feed = new InstagramFeed({
                get: 'tagged',
                tagName: 'vsco' (change vsco to whatever you like)
</code></pre>

<p>You can change the limit of pictures to fetch both in the files slideshow.js and search.js like this:</p>

<pre><code>feed = new InstagramFeed({
                limit: '30' (can be changed from 1-60)
</code></pre>
                                </div>
                           
                            </div>
                       
                        </div>
                       
                      </div>
                   
                </div>




































<?php include('footer.php'); ?>