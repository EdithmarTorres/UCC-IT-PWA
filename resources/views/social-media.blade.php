<x-layout>
    <!-- SOCIAL MEDIA DISPLAY PAGE FOR UCC IT PWA WITH BUILT-IN VIEWING OF UCC SOCIAL MEDIA POSTS -->
    <x-slot:title>
        Social Media | UCC IT Department
    </x-slot:title>
    <section class="social-page">

        <!-- PAGE INTRODUCTION -->
        <h2 id = "specialh2">Social Media</h2>

        <div class="social-heading">

            <h1>Connect With UCC</h1>

            <p id = "specialp">
                Stay connected with the University of the Commonwealth Caribbean.
                Follow our official social media platforms for news, updates and events.
            </p>

        </div>

        <!-- SOCIAL MEDIA BUTTONS -->
        <div class="social-buttons">

            <a href="#facebook-feed" class="social-button">
                <img src="{{ asset('gallery/facebook_logo.png') }}" alt="Facebook logo">
                <span>Facebook</span>
            </a>

            <a href="#instagram-feed" class="social-button">
                <img src="{{ asset('gallery/instagram_logo.png') }}" alt="Instagram logo">
                <span>Instagram</span>
            </a>

            <a href="#x-feed" class="social-button">
                <img src="{{ asset('gallery/x_logo.png') }}" alt="X logo">
                <span>X / Twitter</span>
            </a>

        </div>

        <!-- FACEBOOK SECTION -->
        <section class="social-feed" id="facebook-feed">

            <div class="social-feed-heading">

                <h2>UCC on Facebook</h2>

                <a href="https://www.facebook.com/uccjamaica/?locale=en_GB"
                   target="_blank"
                   rel="noopener noreferrer">
                    Visit Facebook Page
                </a>

            </div>

            <div class="facebook-posts">

                <!-- FACEBOOK POST 1 -->
                <iframe
                    src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fuccjamaica%2Fposts%2Fpfbid0We4y4C9ZwQgqhkWBXaovBf5c8dH5KCr9P1ytRNa4K1k56SdkD73X956nfkbofeZSl&show_text=true&width=500"
                    width="500"
                    height="791"
                    style="border:none;overflow:hidden"
                    scrolling="no"
                    frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                    title="UCC Facebook Post 1"
                    loading="lazy">
                </iframe>


                <!-- FACEBOOK POST 2 -->
                <iframe
                    src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fuccjamaica%2Fposts%2Fpfbid02ydA8ZQMayKfsiwb8gamW7H6Tu1vhSFwvXsh2GDrQQQ4Ec3oCyBx9bDdLWgGQUCfZl&show_text=true&width=500"
                    width="500"
                    height="791"
                    style="border:none;overflow:hidden"
                    scrolling="no"
                    frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                    title="UCC Facebook Post 2"
                    loading="lazy">
                </iframe>

            </div>

        </section>


        <!-- INSTAGRAM SECTION -->
        <section class="social-feed" id="instagram-feed">

            <div class="social-feed-heading">

                <h2>UCC on Instagram</h2>

                <a href="https://www.instagram.com/uccjamaica"
                   target="_blank"
                   rel="noopener noreferrer">
                    Visit Instagram Page
                </a>

            </div>

            <div class="instagram-posts">

                <!-- INSTAGRAM POST 1 -->
                <blockquote
                    class="instagram-media"
                    data-instgrm-captioned
                    data-instgrm-permalink="https://www.instagram.com/p/DeZuI7_jDlP/"
                    data-instgrm-version="14">

                    <a href="https://www.instagram.com/p/DeZuI7_jDlP/"
                       target="_blank"
                       rel="noopener noreferrer">
                        View this post on Instagram
                    </a>

                </blockquote>


                <!-- INSTAGRAM POST 2 -->
                <blockquote
                    class="instagram-media"
                    data-instgrm-captioned
                    data-instgrm-permalink="https://www.instagram.com/p/Deo9Ldylxl2/"
                    data-instgrm-version="14">

                    <a href="https://www.instagram.com/p/Deo9Ldylxl2/"
                       target="_blank"
                       rel="noopener noreferrer">
                        View this post on Instagram
                    </a>

                </blockquote>

            </div>

        </section>


        <!-- X / TWITTER SECTION -->
        <section class="social-feed" id="x-feed">

            <div class="social-feed-heading">

                <h2>UCC on X</h2>

                <a href="https://x.com/uccjamaica"
                   target="_blank"
                   rel="noopener noreferrer">
                    Visit X Profile
                </a>

            </div>

            <div class="x-posts">

                <!-- X POST 1 -->
                <blockquote class="twitter-tweet">

                    <p lang="en" dir="ltr">
                        Looking to advance your education or grow professionally?
                        Meet Stephanie Franklin-Lothian, Campus Manager, and Nickola Smith,
                        Recruiter, from the Ocho Rios campus for guidance on your next step.

                        📍 99 Main Street, Ocho Rios
                        📞 876-795-0983

                        #UCCJamaica
                    </p>

                    &mdash; University of the Commonwealth Caribbean (@UCCjamaica)

                    <a href="https://x.com/UCCjamaica/status/2116175861992804614?ref_src=twsrc%5Etfw">
                        October 30, 2026
                    </a>

                </blockquote>


                <!-- X POST 2 -->
                <blockquote class="twitter-tweet">

                    <p lang="en" dir="ltr">
                        This National Heroes’ Day, we honour the Jamaicans whose actions
                        helped shape our nation and advance the rights and opportunities
                        we value today. May their contributions continue to inform how
                        we learn, lead and serve.

                        Happy National Heroes’ Day from UCC.

                        #UCCJamaica
                    </p>

                    &mdash; University of the Commonwealth Caribbean (@UCCjamaica)

                    <a href="https://x.com/UCCjamaica/status/2112182371269136494?ref_src=twsrc%5Etfw">
                        October 19, 2026
                    </a>

                </blockquote>

            </div>
        </section>
    </section>

    <!-- INSTAGRAM EMBED SCRIPT -->
    <script async src="https://www.instagram.com/embed.js"></script>

    <!-- X EMBED SCRIPT -->
    <script async src="https://platform.x.com/widgets.js"
            charset="utf-8"></script>

</x-layout>
