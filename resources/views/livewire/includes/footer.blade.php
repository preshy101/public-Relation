<footer class="site-footer" >
    <div class="contact-info" style="background-color: red">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box" style="background-color: white; color: red" ><i class="fa fa-map-marker"></i></div>
                    <p>Suite 4, Block A, A R O Plaza, Plot 2105,

                        Herbert Macaulay Way, Wuse, Zone 6, Abuja</p>
                </div> <!-- .col-md-4 -->
                <div class="col-md-4">
                   {{--  <div class="icon-box" style="background-color: white; color: red" >
                        <i class="fa fa-envelope"></i> 
                    </div>--}}
                    {{-- <a href="#">hello@corporex.com</a> --}}
                </div> <!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="icon-box" style="background-color: white; color: red" ><i class="fa fa-phone"></i></div>
                  <br>  <a href="#">07010383277, 09094367076</a>
                </div> <!-- .col-md-4 -->
                
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .cntact-info -->
    <div class="footer-blocks">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-about">
                    <h3 class="widget-title">About Us</h3>
                    <p>
                        Nigerian Institute of Public Relations (NIPR) hitherto
                         known as the Public Relations Association of Nigeria (until when it was 
                        renamed in 1972) was established in 1963. 
                        The body attained the status of a Chartered Institute on June 1st 1990 
                        through Decree No. 16 (now an Act of the National Assembly). 
                    </p>
                    <ul class="list-inline footer-social">
                        <li><a href="https://www.facebook.com/profile.php?id=100004381365825&mibextid=AEUHqQ"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://x.com/nipr_hq?s=11&t=9HmMeHB4scZXQG4gvZuypA"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/niprhq/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/nipr_hq/"><i class="fa fa-instagram"></i></a></li>
                    </ul> <!-- .footer-social -->
                </div> <!-- col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6 widget widget-gallery">
                    <h3 class="widget-title">Gallery</h3>
                    
                    <ul class="list-inline photo-gallery footer-gallery clearfix">
                        @php
                            $gallery = App\Models\imageGallery::latest()->take(6)->get();
                            // dd($gallery);
                        @endphp
                        @if ($gallery != null) 
                        @foreach ($gallery as $index => $item)
                            <li>
                                <a class="gallery-img" href="#"><img class="img-responsive" width="60" height="66.2"
                                src="{{Storage::url($item->image[0])}}" alt="gallery photo"></a>
                            </li> 
                        @endforeach
                        @endif
                        
                    </ul> <!-- .footer-social -->
                </div> <!-- col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6 recent-post-widget">
                    <h3 class="widget-title">Recent posts</h3>
                    <ul class="post-list">
                        @php
                        $posts = App\Models\Post::published()->latest()->take(3)->get();
                    @endphp
                        @if (!empty($posts))
                        @foreach ($posts as $item)  
                        <li class="clearfix">
                            <div class="image-wrapper"><img class="img-responsive" 
                                src="{{Storage::url($item->image)}}"  alt="news post thumbnail"></div>
                            <div class="content-wrapper">
                                <h5><a wire:navigate href="/news/posts/{{$item->slug}}">{{$item->title}}</a></h5>
                                <p>{{$item->published_at->diffForHumans()}}</p>
                            </div> <!-- .content-wrapper -->
                        </li> <!-- .clearfix -->
                        @endforeach
                        @endif
                       
                    </ul> <!-- .post-list -->
                </div> <!-- col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6 newsletter-widget">
                    <h3 class="widget-title">Subscribe Us</h3>
                    <form class="subscription-form"  >
                        <div class="form-group">
                            <label class="sr-only" for="subscriber-name">Name</label>
                            <input wire:model='sub' type="text" name="subscriber-name" id="subscriber-name" class="form-control" placeholder="Your name">
                        </div> <!-- .form-group -->
                        <div class="form-group">
                            <label class="sr-only" for="subscriber-email">Email</label>
                            <input type="text" name="subscriber-email" id="subscriber-email" class="form-control" placeholder="Your email">
                        </div> <!-- .form-group -->
                        <button wire:click.prevent='create' class="btn btn-main">Submit</button>
                    </form> <!-- .subscription-form -->
                </div> <!-- col-lg-3 col-md-6 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .footer-blocks -->
    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>All rights reserved &copy; {{now()->year}} <strong> niprng.org.ng</strong></p>
                </div> <!-- .col-md-6 -->
                <div class="col-md-6">
                    <ul class="bottom-links">
                        {{-- <li><a href="#">Terms &amp; Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help</a></li> --}}
                    </ul> <!-- .bottom-links -->
                </div> <!-- .col-md-6 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .bottom-bar -->
</footer> <!-- .site-footer -->

<!-- SCRIPTS -->
@livewireScripts
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/js/slick.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('frontend/js/mixitup.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.easypiechart.min.js')}}"></script> 

<script src="{{ asset('frontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('frontend/js/script.js')}}"></script>

</body>
</html>