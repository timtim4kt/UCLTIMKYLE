@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            UCL Featured Short Blogs
        </h1>
    </div>
</div>
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32" style="margin-top: 3%">
			
    <div class="mx-0 sm:mx-6">
        
        <!--Nav-->
        <nav class="mt-0 w-full">
            <div class="container mx-auto flex items-center">
                
               


                <div class="flex w-1/2 justify-end content-center">		
                    <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="@twitter_handle" href="https://twitter.com/intent/tweet?url=#">
                        <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path></svg>
                    </a>
                    <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="#facebook_id" href="https://www.facebook.com/sharer/sharer.php?u=#">
                        <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path></svg>
                    </a>
                </div>

            </div>
        </nav>

        <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
            
        <!--Lead Card-->
        <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
            <a href="/blog" class="flex flex-wrap no-underline hover:no-underline">
                <div class="w-full md:w-2/3 rounded-t">	
                    <img src="https://d3nfwcxd527z59.cloudfront.net/content/uploads/2021/09/23110653/karim-benzema-real-madrid.jpg" class="h-full w-full shadow">
                </div>

                <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <div class="w-full font-bold text-xl text-gray-900 px-6">Karim Benzema On Fire</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            Karim Benzema was Real Madrid's hat-trick hero for the second consecutive Champions League game as he put Chelsea to the sword in a 3-1 win at Stamford Bridge.

Having struck three goals in 17 minutes to knock Paris Saint-Germain out of the tournament in the previous round, his three goals against Chelsea also came within less than half an hour of each other.

Benzema scored two brilliant headers on 21 and 24 minutes to fire Real into a 2-0 lead. Chelsea pulled one back through Kai Havertz but Benzema struck again early in the second half after mistakes from Edouard Mendy and Antonio Rudiger.


                        </p>
                    </div>

                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                          
                        </div>
                    </div>
                </div>

            </a>
        </div>
        <!--/Lead Card-->


        <!--Posts Container-->
        <div class="flex flex-wrap justify-between pt-12 -mx-6">

            <!--1/3 col -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="/blog" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="https://e0.365dm.com/22/02/800x600/skysports-champions-league_5673346.jpg" class="h-64 w-full rounded-t pb-6">
                        <div class="w-full font-bold text-xl text-gray-900 px-6">Who Will Be Champions!!</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            Liverpool are the bookmakers’ favourites to win this season’s Champions League after a dominant 2-0 victory over Villarreal in their semi-final, first-leg clash at Anfield.

                            They edge ahead in the market from Manchester City, who won the first leg of their semi-final against Real Madrid 4-3. 
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        
                    </div>
                </div>
            </div>
        
            
            <!--1/3 col -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="/blog" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="https://jerseyeveningpost.com/wp-content/uploads/2022/03/14111257/Img32825613.jpg" class="h-64 w-full rounded-t pb-6">
                        <div class="w-full font-bold text-xl text-gray-900 px-6">Dissapointing Man Utd</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            David De Gea spelled out his emotions after Manchester United’s exit from the Champions League against Atletico Madrid.

A place in the quarter-finals was beyond the Red Devils after Renan Lodi struck on Tuesday night, with only a few chances created by the hosts in reply.

It means United will spend a fifth season in a row without a trophy, with their place in next season’s competition also under threat amid their fight for fourth place in the Premier League.
                        </p>
                    </a>
                    </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
          
                    </div>
                </div>
            </div>

            <!--1/3 col -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="/blog" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMb-u-Ikdq3hWsFu2XGbFa0OcHNXk3t3YYsA&usqp=CAU" class="h-64 w-full rounded-t pb-6">
                        <div class="w-full  font-bold text-xl text-gray-900 px-6">PSG vs Manchester City</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            Striker Gabriel Jesus scored a late winner as Manchester City came from behind to beat Paris Saint-Germain 2-1 in the Champions League on Wednesday, with both sides advancing through to the last 16 of the competition.

                            Kylian Mbappe continued his impressive form in front of goal when opened the scoring at the Etihad Stadium on 50 minutes, but goals from winger Raheem Sterling and Jesus were enough to claim a comeback victory for City, who secured top spot in Group A with one match to play.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                  
                    </div>
                </div>
            </div>


            <!--1/2 col -->
            <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="/blog" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="https://i1.wp.com/www.arise.tv/batman/2020/12/Champions-League.jpg?fit=800%2C600&ssl=1" class="h-full w-full rounded-t pb-6">
                        <div class="w-full font-bold text-xl text-gray-900 px-6">Who will be top Scorer</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            Borussia Dortmund wonderkid Erling Haaland was crowned the Champions League top-scorer in 2020-21 season despite his side being knocked out at the quarter-final stage.

Haaland scored 10 goals, finishing two goals ahead of PSG star Kylian Mbappe and four ahead of the likes of Marcus Rashford, Olivier Giroud and Mohamed Salah who scored six goals each.

It was Lewandowski who finished as the Champions League top scorer the campaign prior in 2019-20, which is also the season that Bayern won the competition.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                       
                    </div>
                </div>
            </div>

            <!--1/2 col -->
            <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="/blog" class="flex flex-wrap no-underline hover:no-underline">	
                        <img src="https://www.teahub.io/photos/full/302-3021150_liverpool-anfield-stadium-shankly-gates.jpg" class="h-full w-full rounded-t pb-6">
                        <div class="w-full font-bold text-xl text-gray-900 px-6">“Anfield is hell” – Villarreal midfielder in awe of “the worst stadium in England”</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            Villarreal midfielder Etienne Capoue has described Anfield as “hell,” ahead of his side’s trip to take on Liverpool in the Champions League semi-finals.

The Reds face yet another huge game on Wednesday evening, and they are within touching distance of a third Champions League final in five years.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    
                </div>
            </div>
    </div>
    
</div>


</div>
@endsection