<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'/>
        <title>Grabit</title>
        <link rel="stylesheet" href="<?=SITE_URL;?>assets/plugins/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?=SITE_URL;?>assets/plugins/fontawesome/css/font-awesome.css"/>
        <link rel="stylesheet" href="<?=SITE_URL;?>assets/plugins/webslidemenu/css/webslidemenu.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" media="all" href="<?=SITE_URL;?>assets/theme/css/demo.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?=SITE_URL;?>assets/theme/css/style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?=SITE_URL;?>assets/plugins/bootstrap-social.css" />
    </head>
    <body>        
        <div class="wsmenucontainer clearfix">
                <div class="overlapblackbg"></div>
                  <div class="wsmobileheader clearfix">
                      <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
                      <a class="smallogo"><img src="<?=SITE_URL;?>images/logo.png"  alt="" /></a>
                      <!-- <a class="callusicon" href="tel:123456789"><span class="fa fa-phone"></span></a>  -->
                      <a class="callusicon" data-toggle="modal" data-target="#signinModal"><i class="fa fa-user"></i></a>
                  </div>
                <div class="headerfull"> 
                  <!--Main Menu HTML Code-->
                  <div class="wsmain">
                    <div class="smllogo" style="background:#f05c48;">
                      <a href="#"><img src="<?=SITE_URL;?>images/logo.png" alt=""/></a>
                    </div>
                    <nav class="wsmenu clearfix">
                      <ul class="mobile-sub wsmenu-list">

                        <li><a href="#" class="navtext"><span>Shop By</span> <span>Category</span></a>
                          <div class="no-transition wsshoptabing wtsdepartmentmenu clearfix">
                            <div class="wsshopwp clearfix">
                            <ul class="wstabitem clearfix">
                              <li class="wsshoplink-active"><a href="#"><i class="fa fa-male" ></i> Women's Clothing &amp; Accessories</a>
                                <div class="wstitemright clearfix wstitemrightactive">
                                  <div class="wstmegamenucoll clearfix">
                                    <div class="wstheading">Women's Clothing</div>
                                    <ul class="wstliststy01">
                                      <li><a href="#">Sleepwear &amp; Robes</a></li>
                                      <li><a href="#">Shapewear </a></li>
                                      <li><a href="#">Tops &amp; shirts</a></li>
                                      <li><a href="#">Sweatshirts</a></li>
                                      <li><a href="#">Fashion Hoodies <span class="wstmenutag greentag">New</span></a></li>
                                      <li><a href="#">Jeans &amp; Trousers</a></li>
                                      <li><a href="#">Capris and Shorts <span class="wstmenutag bluetag">Trending</span></a></li>
                                      <li><a href="#">Leggings</a></li>
                                      <li><a href="#">Swimsuits &amp; Cover Ups</a></li>
                                      <li><a href="#">Lingerie, Sleep &amp; Lounge</a></li>
                                      <li><a href="#">Inner &amp; Nightwear</a> <span class="wstmenutag redtag">Sale</span></li>
                                      <li><a href="#">Jumpsuits, Rompers &amp; Overalls</a></li>
                                      <li><a href="#">Coats, Jackets &amp; Vests</a></li>
                                      <li><a href="#">Suiting &amp; Blazers </a></li>
                                      <li><a href="#">Socks &amp; Hosiery</a></li>
                                    </ul>
                                    <div class="cl" style="height:8px;"></div>
                                    <div class="wstheading">Handbags & Wallets</div>
                                    <ul class="wstliststy01">
                                      <li><a href="#">Clutches</a> </li>
                                      <li><a href="#">Cross-Body Bags</a> </li>
                                      <li><a href="#">Evening Bags</a> </li>
                                      <li><a href="#">Shoulder Bags</a> <span class="wstmenutag orangetag">Hot</span></li>
                                      <li><a href="#">Top-Handle Bags</a> </li>
                                      <li><a href="#">Wristlets</a> </li>
                                    </ul>
                                    <div class="cl" style="height:8px;"></div>
                                    <div class="wstheading">Accessories</div>
                                    <ul class="wstliststy01">
                                      <li><a href="#">Handbag Accessories</a> </li>
                                      <li><a href="#">Sunglasses Accessories</a> </li>
                                      <li><a href="#">Eyewear Accessories</a> </li>
                                      <li><a href="#">Scarves & Wraps</a> </li>
                                      <li><a href="#">Gloves & Mittens</a> </li>
                                      <li><a href="#">Hats & Caps</a> </li>
                                      <li><a href="#">Handbag Accessories</a> </li>
                                    </ul>
                                  </div>
                                  <div class="wstmegamenucolr clearfix">
                                    <div class="wstbootslider clearfix">
                                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                          <div class="item active"> <a href="#"><img src="<?=SITE_URL;?>images/woman-ad-img.jpg" alt="" ></a>
                                            <div class="carousel-caption">
                                              <h3>First slide label</h3>
                                            </div>
                                          </div>
                                          <div class="item"> <a href="#"><img src="<?=SITE_URL;?>images/woman-ad-img02.jpg" alt="" ></a>
                                            <div class="carousel-caption">
                                              <h3>Second slide label</h3>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <!-- Controls --> 
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li><a href="#"><i class="fa fa-female"></i> Men's Clothing &amp; Accessories</a>
                                <div class="wstitemright clearfix">
                                  <div class="wstmegamenucoll clearfix">
                                    <div class="wstheading">Men's Clothing</div>
                                    <ul class="wstliststy01">
                                      <li><a href="#">Shirts <span class="wstmenutag greentag">New</span></a></li>
                                      <li><a href="#">Fashion Hoodies & Sweatshirts </a></li>
                                      <li><a href="#">Sweaters</a></li>
                                      <li><a href="#">Jackets & Coats</a></li>
                                      <li><a href="#">Jeans </a></li>
                                      <li><a href="#">Pants &amp; Trousers</a></li>
                                      <li><a href="#">Capris and Shorts </a></li>
                                      <li><a href="#">Swim</a></li>
                                      <li><a href="#">Suits & Sport Coats</a></li>
                                      <li><a href="#">Underwear</a></li>
                                      <li><a href="#">Socks</a> </li>
                                      <li><a href="#">Sleep & Lounge</a></li>
                                      <li><a href="#">T-Shirts & Tanks <span class="wstmenutag redtag">20% off Sale</span></a></li>
                                      <li><a href="#">Active</a></li>
                                      <li><a href="#">Sport Coats <span class="wstmenutag bluetag">Trending</span></a></li>
                                    </ul>
                                    <div class="cl" style="height:8px;"></div>
                                    <div class="wstheading">Shoes & Wallets</div>
                                    <ul class="wstliststy01">
                                      <li><a href="#">Athletic</a> </li>
                                      <li><a href="#">Boots</a> <span class="wstmenutag orangetag">Exclusive</span></li>
                                      <li><a href="#">Fashion Sneakers</a> </li>
                                      <li><a href="#">Loafers & Slip-Ons</a> </li>
                                      <li><a href="#">Mules & Clogs</a> </li>
                                      <li><a href="#">Outdoor</a> </li>
                                      <li><a href="#">Oxfords</a> </li>
                                      <li><a href="#">Sandals</a> </li>
                                      <li><a href="#">Slippers</a> </li>
                                    </ul>
                                    <div class="cl" style="height:8px;"></div>
                                    <div class="wstheading">Accessories</div>
                                    <ul class="wstliststy01">
                                      <li><a href="#">Belts</a> </li>
                                      <li><a href="#">Suspenders</a> </li>
                                      <li><a href="#">Eyewear Accessories</a> </li>
                                      <li><a href="#">Neckties</a> </li>
                                      <li><a href="#">Bow Ties & Cummerbunds</a> </li>
                                      <li><a href="#">Collar Stays</a> </li>
                                    </ul>
                                  </div>
                                  <div class="wstmegamenucolr clearfix"><a href="#"><img src="<?=SITE_URL;?>images/man-ad-img.jpg" alt="" ></a></div>
                                </div>
                              </li>
                              <li><a href="#"><i class="fa fa-play-circle"></i> Movies, Music &amp; Games</a>
                                <div class="wstitemright clearfix">
                                  <ul class="wstliststy02">
                                    <li class="wstheading">Latest Movies</li>
                                    <li><a href="#">Action & Adventure <span class="wstmenutag greentag">New</span></a></li>
                                    <li><a href="#">Bollywood </a></li>
                                    <li><a href="#">Comedy</a></li>
                                    <li><a href="#">Documentary</a></li>
                                    <li><a href="#">Educational</a></li>
                                    <li><a href="#">Exercise & Fitness </a></li>
                                    <li><a href="#">Faith & Spirituality</a></li>
                                    <li><a href="#">Fantasy</a></li>
                                    <li><a href="#">Romance</a></li>
                                  </ul>
                                  <ul class="wstliststy02">
                                    <li class="wstheading">Newest Games</li>
                                    <li><a href="#">PlayStation 4 </a> </li>
                                    <li><a href="#">Xbox One </a> <span class="wstmenutag orangetag">Most Viewed</span></li>
                                    <li><a href="#">Xbox 360 </a> </li>
                                    <li><a href="#">Nintendo DS</a> </li>
                                    <li><a href="#">PlayStation Vita </a> </li>
                                    <li><a href="#">Retro Gaming</a> </li>
                                    <li><a href="#">Digital Games</a> </li>
                                    <li><a href="#">Microconsoles</a> </li>
                                    <li><a href="#">Kids & Family </a> </li>
                                  </ul>
                                  <ul class="wstliststy02">
                                    <li class="wstheading">Popular Music Genre</li>
                                    <li><a href="#">Alternative & Indie Rock</a> </li>
                                    <li><a href="#">Broadway & Vocalists</a> </li>
                                    <li><a href="#">Children's Music</a> </li>
                                    <li><a href="#">Christian <span class="wstmenutag bluetag">50% off</span></a> </li>
                                    <li><a href="#">Classical</a> </li>
                                    <li><a href="#">Classic Rock</a> </li>
                                    <li><a href="#">Comedy & Miscellaneous </a> </li>
                                    <li><a href="#">Country</a> </li>
                                    <li><a href="#">Dance & Electronic</a> </li>
                                  </ul>
                                  <ul class="wstliststy02">
                                    <li class="wstheading">Popular Music Genre</li>
                                    <li><a href="#">Alternative & Indie Rock</a> </li>
                                    <li><a href="#">Broadway & Vocalists</a> </li>
                                    <li><a href="#">Children's Music <span class="wstmenutag redtag">Discounted</span></a></a> </li>
                                    <li><a href="#">Christian</a> </li>
                                    <li><a href="#">Classical</a> </li>
                                    <li><a href="#">Classic Rock</a> </li>
                                    <li><a href="#">Comedy & Miscellaneous</a> </li>
                                    <li><a href="#">Country</a> </li>
                                    <li><a href="#">Dance & Electronic</a> </li>
                                  </ul>
                                  <div class="wstadsize01 clearfix"><a href="#"><img src="<?=SITE_URL;?>images/ad-size01.jpg" alt="" ></a></div>
                                  <div class="wstadsize02 clearfix"><a href="#"><img src="<?=SITE_URL;?>images/ad-size02.jpg" alt="" ></a></div>
                                </div>
                              </li>
                              <li><a href="#"><i class="fa fa-cutlery"></i>Home &amp; Kitchen</a>
                                <div class="wstitemright clearfix kitchenmenuimg">
                                  <ul class="wstliststy02">
                                    <li class="wstheading">Home Appliances</li>
                                    <li><a href="#">Air Conditioners <span class="wstmenutag greentag">New</span></a></li>
                                    <li><a href="#">Air Coolers </a></li>
                                    <li><a href="#">Fans</a></li>
                                    <li><a href="#">Microwaves</a></li>
                                    <li><a href="#">Refrigerators</a></li>
                                    <li><a href="#">Washing Machines </a></li>
                                    <li><a href="#">Jars & Containers </a></li>
                                    <li><a href="#">LED & CFL bulbs </a></li>
                                    <li><a href="#">Drying Racks </a></li>
                                    <li><a href="#">Laundry Baskets</a> <span class="wstmenutag orangetag">New</span></li>
                                    <li><a href="#">Vases</a></li>
                                    <li><a href="#">Clocks</a></li>
                                    <li><a href="#">Washing Machines </a></li>
                                    <li><a href="#">Bedsheets </a></li>
                                  </ul>
                                  <ul class="wstliststy02">
                                    <li class="wstheading">Kitchen Appliances</li>
                                    <li><a href="#">Air Fryers </a></li>
                                    <li><a href="#">Espresso Machines</a></li>
                                    <li><a href="#">Food Processors</a> <span class="wstmenutag bluetag">Popular</span></li>
                                    <li><a href="#">Hand Blenders</a></li>
                                    <li><a href="#">Induction Cooktops</a></li>
                                    <li><a href="#">Juicers</a></li>
                                    <li><a href="#">Microwave Ovens</a></li>
                                    <li><a href="#">Mixers & Grinders</a></li>
                                    <li><a href="#">Ovens</a></li>
                                    <li><a href="#">Rice Cookers</a></li>
                                    <li><a href="#">Stand Mixers</a></li>
                                    <li><a href="#">Sandwich Makers</a></li>
                                    <li><a href="#">Tandoor & Grills</a></li>
                                    <li><a href="#">Toasters</a></li>
                                  </ul>
                                </div>
                              </li>
                              <li><a href="#"><i class="fa fa-television"></i>Electronics Appliances</a>
                                <div class="wstitemright clearfix">
                                  <ul class="wstliststy02">
                                    <li><img src="<?=SITE_URL;?>images/ele-menu-img01.jpg" alt=" "></li>
                                    <li class="wstheading">TV & Audio</li>
                                    <li><a href="#">4K Ultra HD TVs </a></li>
                                    <li><a href="#">Curved TVs </a></li>
                                    <li><a href="#">LED & LCD TVs</a></li>
                                    <li><a href="#">OLED TVs</a> <span class="wstmenutag bluetag">Popular</span></li>
                                    <li><a href="#">Plasma TVs</a></li>
                                    <li><a href="#">Smart TVs</a></li>
                                    <li><a href="#">Home Theater</a></li>
                                    <li><a href="#">Wireless & streaming</a></li>
                                    <li><a href="#">Stereo System</a></li>
                                  </ul>
                                  <ul class="wstliststy02">
                                    <li><img src="<?=SITE_URL;?>images/ele-menu-img02.jpg" alt=" "></li>
                                    <li class="wstheading">Camera, Photo & Video</li>
                                    <li><a href="#">Accessories <span class="wstcount">(1145)</span></a></li>
                                    <li><a href="#">Bags & Cases <span class="wstcount">(445)</span></a></li>
                                    <li><a href="#">Binoculars & Scopes <span class="wstcount">(45)</span></a></li>
                                    <li><a href="#">Digital Cameras <span class="wstcount">(845)</span></a> </li>
                                    <li><a href="#">Film Photography <span class="wstcount">(245)</span></a> <span class="wstmenutag bluetag">Popular</span></li>
                                    <li><a href="#">Flashes <span class="wstcount">(105)</span></a></li>
                                    <li><a href="#">Lenses <span class="wstcount">(445)</span></a></li>
                                    <li><a href="#">Lighting & Studio <span class="wstcount">(225)</span></a></li>
                                    <li><a href="#">Video <span class="wstcount">(145)</span></a></li>
                                  </ul>
                                  <ul class="wstliststy02">
                                    <li><img src="<?=SITE_URL;?>images/ele-menu-img03.jpg" alt=" "></li>
                                    <li class="wstheading">Cell Phones & Accessories</li>
                                    <li><a href="#">Unlocked Cell Phones </a></li>
                                    <li><a href="#">Smartwatches </a></li>
                                    <li><a href="#">Carrier Phones</a></li>
                                    <li><a href="#">Cell Phone Cases</a> <span class="wstmenutag orangetag">Hot</span></li>
                                    <li><a href="#">Apple Cell Phones</a></li>
                                    <li><a href="#">Bluetooth Headsets</a></li>
                                    <li><a href="#">Cell Phone Accessories</a></li>
                                    <li><a href="#">Fashion Tech</a></li>
                                    <li><a href="#">Headphone</a></li>
                                  </ul>
                                  <ul class="wstliststy02">
                                    <li><img src="<?=SITE_URL;?>images/ele-menu-img04.jpg" alt=" "></li>
                                    <li class="wstheading">Wearable Device</li>
                                    <li><a href="#">Activity Trackers </a></li>
                                    <li><a href="#">Sports & GPS Watches</a></li>
                                    <li><a href="#">Smart Watches</a> <span class="wstmenutag greentag">New</span></li>
                                    <li><a href="#">Virtual Reality Headsets</a></li>
                                    <li><a href="#">Smart Tracking</a></li>
                                    <li><a href="#">Wearable Cameras</a></li>
                                    <li><a href="#">Smart Glasses</a></li>
                                    <li><a href="#">Kids & Pets</a></li>
                                    <li><a href="#">Smart Sport Accessories</a></li>
                                  </ul>
                                </div>
                              </li>
                              <li><a href="#"><i class="fa fa-laptop"></i>Computers &amp; Accessories</a>
                                <div class="wstitemright clearfix computermenubg">
                                  <div class="wstmegamenucoll01 clearfix">
                                    <div class="wstheading">Monitors <a href="#" class="wstmorebtn">View All</a></div>
                                    <ul class="wstliststy03">
                                      <li><a href="#">50 Inches & Above <span class="wstmenutag greentag">New</span></a></li>
                                      <li><a href="#">40 to 49.9 Inches </a></li>
                                      <li><a href="#">30 to 39.9 Inches</a></li>
                                      <li><a href="#">26 to 29.9 Inches</a></li>
                                      <li><a href="#">18 to 19.9 Inches</a></li>
                                      <li><a href="#">16 to 17.9 Inches</a></li>
                                    </ul>
                                    <div class="cl" style="height:8px;"></div>
                                    <div class="wstheading">Printers <a href="#" class="wstmorebtn">View All</a></div>
                                    <ul class="wstliststy03">
                                      <li><a href="#">All-In-One</a> </li>
                                      <li><a href="#">Copying </a> <span class="wstmenutag orangetag">Exclusive</span></li>
                                      <li><a href="#">Faxing </a> </li>
                                      <li><a href="#">Printing Photo Printing</a> </li>
                                      <li><a href="#">Printing Only</a> </li>
                                      <li><a href="#">Scanning </a> </li>
                                    </ul>
                                    <div class="cl" style="height:8px;"></div>
                                    <div class="wstheading">Software <a href="#" class="wstmorebtn">View All</a></div>
                                    <ul class="wstliststy03">
                                      <li><a href="#">Antivirus & Security</a> </li>
                                      <li><a href="#">Business & Office</a> <span class="wstmenutag orangetag">Exclusive</span></li>
                                      <li><a href="#">Web Design</a> </li>
                                      <li><a href="#">Digital Software</a> </li>
                                      <li><a href="#">Education & Reference</a> </li>
                                      <li><a href="#">Lifestyle & Hobbies</a> </li>
                                    </ul>
                                    <div class="cl" style="height:8px;"></div>
                                    <div class="wstheading">Accessories <a href="#" class="wstmorebtn">View All</a></div>
                                    <ul class="wstliststy03">
                                      <li><a href="#">Audio & Video Accessories</a> </li>
                                      <li><a href="#">Cable Security Devices</a> </li>
                                      <li><a href="#">Input Devices </a> </li>
                                      <li><a href="#">Memory Cards</a> </li>
                                      <li><a href="#">Monitor Accessories</a> </li>
                                      <li><a href="#">USB Gadgets</a> </li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                              <li><a href="#"><i class="fa fa-car"></i>Auto accessories</a>
                                <div class="wstitemright clearfix wstpngsml">
                                  <ul class="wstliststy04">
                                    <li><img src="<?=SITE_URL;?>images/auto-menu-img01.jpg" alt=" "></li>
                                    <li class="wstheading"><a href="#">Interior</a></li>
                                  </ul>
                                  <ul class="wstliststy04">
                                    <li><img src="<?=SITE_URL;?>images/auto-menu-img02.jpg" alt=" "></li>
                                    <li class="wstheading"><a href="#">Styling</a></li>
                                  </ul>
                                  <ul class="wstliststy04">
                                    <li><img src="<?=SITE_URL;?>images/auto-menu-img03.jpg" alt=" "></li>
                                    <li class="wstheading"><a href="#">Utility</a></li>
                                  </ul>
                                  <ul class="wstliststy04">
                                    <li><img src="<?=SITE_URL;?>images/auto-menu-img04.jpg" alt=" "></li>
                                    <li class="wstheading"><a href="#">Spare Parts</a></li>
                                  </ul>
                                  <ul class="wstliststy04">
                                    <li><img src="<?=SITE_URL;?>images/auto-menu-img05.jpg" alt=" "></li>
                                    <li class="wstheading"><a href="#">Protection</a></li>
                                  </ul>
                                  <ul class="wstliststy04">
                                    <li><img src="<?=SITE_URL;?>images/auto-menu-img06.jpg" alt=" "></li>
                                    <li class="wstheading"><a href="#">Cleaning</a></li>
                                  </ul>
                                  <ul class="wstliststy04">
                                    <li><img src="<?=SITE_URL;?>images/auto-menu-img07.jpg" alt=" "></li>
                                    <li class="wstheading"><a href="#">Car Audio</a></li>
                                  </ul>
                                  <ul class="wstliststy04">
                                    <li><img src="<?=SITE_URL;?>images/auto-menu-img08.jpg" alt=" "></li>
                                    <li class="wstheading"><a href="#">Gear & Accessories</a></li>
                                  </ul>
                                </div>
                              </li>
                              <li><a href="#"><i class="fa fa-heartbeat"></i>Health Care Products</a>
                                <div class="wstitemright clearfix wstpngsml">
                                  <div class="wstmegamenucolr03 clearfix"> <img src="<?=SITE_URL;?>images/health-menu-img01.jpg" alt=""> </div>
                                  <div class="wstmegamenucoll04 clearfix">
                                    <ul class="wstliststy05 clearfix">
                                      <li><img src="<?=SITE_URL;?>images/health-menu-img02.jpg" alt=" "></li>
                                      <li class="wstheading">Health Care</li>
                                      <li><a href="#">Diabetes </a></li>
                                      <li><a href="#">Incontinence </a></li>
                                      <li><a href="#">Cough & Cold</a></li>
                                      <li><a href="#">Baby & Child Care</a> <span class="wstmenutag bluetag">Popular</span></li>
                                      <li><a href="#">Women's Health</a></li>
                                      <li><a href="#">First Aid</a></li>
                                      <li><a href="#">Smoking Cessation</a></li>
                                      <li><a href="#">Sleep & Snoring</a></li>
                                    </ul>
                                    <ul class="wstliststy05 clearfix">
                                      <li><img src="<?=SITE_URL;?>images/health-menu-img03.jpg" alt=" "></li>
                                      <li class="wstheading">Personal Care</li>
                                      <li><a href="#">Shaving & Hair Removal</a></li>
                                      <li><a href="#">Feminine Hygiene</a></li>
                                      <li><a href="#">Oral Care</a></li>
                                      <li><a href="#">Foot Care</a> <span class="wstmenutag bluetag">Popular</span></li>
                                      <li><a href="#">Hand Care</a></li>
                                      <li><a href="#">Personal Care Appliances</a></li>
                                      <li><a href="#">Shaving Foams & Creams</a></li>
                                      <li><a href="#">Hair Removal Creams</a></li>
                                    </ul>
                                    <ul class="wstliststy05 clearfix">
                                      <li><img src="<?=SITE_URL;?>images/health-menu-img04.jpg" alt=" "></li>
                                      <li class="wstheading">Medical Equipment</li>
                                      <li><a href="#">Crepe Bandages, Tapes & Supplies </a></li>
                                      <li><a href="#">Neck Supports</a></li>
                                      <li><a href="#">Arm Supports</a> <span class="wstmenutag bluetag">Popular</span></li>
                                      <li><a href="#">Elbow Braces</a></li>
                                      <li><a href="#">Knee & Leg Braces</a></li>
                                      <li><a href="#">Ankle Braces</a></li>
                                      <li><a href="#">Foot Supports</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                            </ul>
                            </div>
                          </div>
                        </li>
                        
                        <li><a href="#" class="navtext"><span>Shop By</span> <span>Stores</span></a>
                          <div class="no-transition megamenu clearfix">
                            
                            
                                  <ul class="wstliststy02">
                                      <li class="wstheading"> Skype Products </li>
                                      <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>
                                      <li><a href="#">List Products 02</a></li>
                                      <li><a href="#">List Products 03</a></li>
                                      <li><a href="#">List Products 04</a> </li>
                                      <li><a href="#">List Products 05</a> </li>
                                      <li><a href="#">List Products 06</a></li>
                                    </ul>
                                  <ul class="wstliststy02">
                                      <li class="wstheading">Paypal Products</li>
                                      <li><a href="#">List Products 07 </a></li>
                                      <li><a href="#">List Products 08</a></li>
                                      <li><a href="#">List Products 09</a></li>
                                      <li><a href="#">List Products 10</a> </li>
                                      <li><a href="#">List Products 11 </a></li>
                                      <li><a href="#">List Products 12</a></li>
                                    </ul>
                                  <ul class="wstliststy02">
                                      <li class="wstheading">Sound Cloud Products</li>
                                      <li><a href="#">List Products 13 </a> <span class="wstmenutag orangetag">20% off</span></li>
                                      <li><a href="#">List Products 14</a></li>
                                      <li><a href="#">List Products 15</a></li>
                                      <li><a href="#">List Products 16</a> </li>
                                      <li><a href="#">List Products 17</a></li>
                                      <li><a href="#">List Products 18</a></li>
                                    </ul>
                                  <ul class="wstliststy02">
                                      <li class="wstheading">Get Pocket Products</li>
                                      <li><a href="#">List Products 19 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                                      <li><a href="#">List Products 20</a></li>
                                      <li><a href="#">List Products 21</a></li>
                                      <li><a href="#">List Products 22</a> </li>
                                      <li><a href="#">List Products 23</a></li>
                                      <li><a href="#">List Products 24</a></li>
                                    </ul>
                              
                            
                          </div>
                        </li>
                        
                        <li><a href="#" class="navtext"><span>Shop By</span> <span>Local Stores</span></a>
                          <ul class="no-transition wsmenu-submenu clearfix">
                            <li><a href="#"><i class="fa fa-angle-right"></i>Website Design</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Ecommerce Solutions</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Application Development</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Website Development</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Open Source Development</a>
                              <ul class="no-transition wsmenu-submenu-sub">
                                <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 1</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 2</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 4</a>
                                  <ul class="no-transition wsmenu-submenu-sub-sub">
                                    <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 1 Sub</a></li>
                                    <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 2 Sub</a></li>
                                    <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 3 Sub</a></li>
                                    <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 4 Sub</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>


                        <li class="wssearchbar clearfix">
                          <form class="topmenusearch">
                            <input placeholder="Search Product By Name, Category..." id="search_field">
                            <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
                            <div id="search_suggestion"></div>
                          </form>
                        </li>
                        <li class="wsshopmyaccount clearfix"><a data-toggle="modal" data-target="#signinModal"><i class="fa fa-user"></i> My Account </a></li>
                        <!-- <li class="wsshopmyaccount clearfix"><a href="#" class="wtxaccountlink"><i class="fa fa-user"></i> My Account <i class="fa  fa-angle-down"></i></a>
                          <ul class="wsmenu-submenu">
                            <li><a href="#"><i class="fa fa-black-tie"></i>View Profile</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i>My Wishlist</a></li>
                            <li><a href="#"><i class="fa fa-bell"></i>Notnification</a></li>
                            <li><a href="#"><i class="fa fa-question-circle"></i>Help Center</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i>Logout</a></li>
                          </ul>
                        </li> -->
                        <!-- <li class="dropdown pull-right">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                          <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-book"></i> Books</a></li>
                            <li><a href="#"><i class="fa fa-gamepad"></i> Games</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Others</li>
                            <li><a href="#"><i class="fa fa-user-secret"></i> Safe Shopping</a></li>
                            <li><a href="#"><i class="fa fa-info-circle"></i> Help & Support</a></li>
                          </ul>
                        </li> -->
                      </ul>
                    </nav>
                  </div>
                  <!--Menu HTML Code--> 
                </div>
                <div class="nav-body-space"></div>
        </div>




