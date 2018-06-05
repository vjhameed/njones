@extends('layouts.app-layout')


@section('title')
  Workshop
@endsection


@section('style')
  <style>
    .container  h3{
        font-family: unisansregularregular;
      }
    .container h2{
      font-family: unisanssemiboldbold;
      font-size: 2em;
    }
  </style>
@endsection

@section('body')
  <header id="workshop-head-section">
      <div class="dark-overlay">
          <div class="home-inner">
              <div class="container">
                  <div class="row">
                      <div class="main-text col-lg-offset-6 text-right col-lg-6" style='padding-top: 150px;'>
                          <div style='line-height:55px'>
                              <span style='font-family:unisansboldbold'>Welcome To<br></span>
                              <span style='color:#33a58e; font-family:unisansboldbold'>Buisness Workshops</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <div class="row">
    <div class="col-md-6 col-md-offset-3 text-center">
      <div class="form-group selectlist">
        <label style="color:#33A58E; font-size:2em; float:left;">Select Workshop:</label>
          <select id="userchoice" class="form-control">
            <option value='0'>Select a Workshop...</option>
            <option value='1'>Writing a Simple Business Plan Workshop</option>
            <option value='2'>Organizational Culture Workshop</option>
            <option value='3'>Organizational Body Workshop</option>
          </select>
      </div>
    </div>
  </div>

  <div class="container carousel-container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div id="carousel-workshop" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <!-- slide 1 -->
            <div class="item active">
              <div class="row">
                <div class="col-md-6 text-center carouselcols">
                  <div class="textcontext">
                  <h1>Welcome to ION's Writing a Simple Business Plan Workshop!!!</h1>
                  </div>
                </div>
                <div class="col-md-6 text-center carouselcols">
                  <img src="sitefront/avatar.png">
                </div>
              </div>
            </div>
            <!-- slide 2 -->
            <div class="item">
              <div class="row">
                <div class="col-md-6 text-center carouselcols">
                  <div class="textcontext">
                  <h2>Today we will explore simple and creative ways to write a Simple Business Plan</h2>
                  </div>
                </div>
                <div class="col-md-6 text-center carouselcols">
                  <img src="sitefront/avatar.png">
                </div>
              </div>
            </div>
            <!-- slide 3 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>The Workshop is structured into 3 segments with breaks and question and answer periods throughout the workshop. You will need pen, notebook and an open mind.</h2>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 4 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>In this course, we will:</h2>
                    <ul class="list-group">
                      <li class="list-group-item">Define a Business Plan</li>
                      <li class="list-group-item">Identify why a Business Plan is important</li>
                      <li class="list-group-item">Identify When to Write a Business Plan</li>
                      <li class="list-group-item">Identify the Key Elements of a Business Plan</li>
                      <li class="list-group-item">Write your own Simple Business Plan</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 5 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Which words you believe are used to define a Business Plan?</h2>
                    <h3>"Check all that apply"</h3>
                    <ul class="list-group">
                      <li class="list-group-item">Written</li>
                      <li class="list-group-item">Formal</li>
                      <li class="list-group-item">Guide</li>
                      <li class="list-group-item">Roadmap for Business</li>
                      <li class="list-group-item">Outline of Goals: Details Plans</li>
                      <li class="list-group-item">A Business Pitch</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 6 -->
            <div class="item">
              <div class="row">
                <div class="col-md-6 text-center carouselcols">
                  <div class="textcontext">
                    <h2 style="text-decoration: underline;">Definition:</h2>
                    <h3>"A Business Plan is a written document that outlines what a company plans to do and how it plans to do it. (Entrepreneur.com)"</h3>
                  </div>
                </div>
                <div class="col-md-6 text-center carouselcols">
                  <img src="sitefront/avatar.png">
                </div>
              </div>
            </div>
            <!-- slide 7 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h1>Why do you believe a Business Plan is important?</h1>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 8 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>A Business Plan helps inform others of your plan and maps out strategies and goals for your company.</h2>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 9 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Icebreaker: On your first sheet of paper, take a quick moment to draft a business card. Include the following information:</h2>
                    <ul>
                      <li>Your (Aspiring) Comapny's Name</li>
                      <li>Your Slogan (Description of what you do in 4 words or less)</li>
                      <li>Your Name (or Founder's Name)</li>
                      <li>Your Email Address</li>
                      <li>Position Title Company</li>
                      <li>Mailing Address</li>
                      <li>Website</li>
                      <li>Phone Number</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 10 -->
            <div class="item">
              <div class="row">
                <div class="col-md-6 text-center carouselcols">
                  <div class="textcontext">
                    <h3>Using the information written on your business card, introduce yourself to the group.</h3>
                  </div>
                </div>
                <div class="col-md-6 text-center carouselcols">
                  <img src="sitefront/avatar.png">
                </div>
              </div>
            </div>
            <!-- slide 11 -->
            <div class="item">
              <div class="row">
                <div class="col-md-6 text-center carouselcols">
                  <div class="textcontext">

                    <h2>Exercise 1: COLLABORATE</h2>
                    <h3>Every product or service you offer should solve a problem</h3>
                    <h3>We will be challenged to receive ideas from others regarding our products or services</h3>
                  </div>
                </div>
                <div class="col-md-6 text-center carouselcols">
                  <img src="sitefront/avatar.png">
                </div>
              </div>
            </div>
            <!-- slide 12 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 1:</h2>
                    <h3>Think of all of the problems in this world. On a sheet of paper, write down a problem (or problems) your company could solve or would like to solve? Make sure the statement is written clearly and in layman's terms.</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 13 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 2:</h2>
                    <h3>Think of the company that may be experiencing the problems you listed and could benefit from your solution. Be sure to include the roles or position titles of the persons with whom you would like to speak about your product or service?</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 14 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 3:</h2>
                    <h3>List the process you believe it will take to initiate contact with your ideal client?</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 15 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 4:</h2>
                    <h3>List the qualities you have in common with your ideal client. What do you believe qualifies you to speak with him or her?</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 16 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 5:</h2>
                    <h3>In clockwise rotation, pass your problem statement and solutions to the person next to you. Take a moment to review your colleague's paper.</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 17 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 6:</h2>
                    <h3>Assess if your colleague's solutions answers the problem statement or if they have listed the appropriate point of contact.</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 18 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 7:</h2>
                    <h3>Take a moment to write at least three recommendations or solutions to your colleague's problem. Use simple sentences and strong action verbs (i.e. generate, build, develop...)</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 19 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 8:</h2>
                    <h3>Let's Discuss. Does your colleague's responses help you to visualize original solutions your company can provide?</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 20 -->
            <div class="item">
              <div class="row">
                <div class="col-md-6 text-center carouselcols">
                  <div class="textcontext">
                    <h2>Exercise Two: Divergent Thinking</h2>
                    <h3>You will be challenged to explore a broad range of ideas. Don't think too hard. Just write. Try to create a long list. Come up with rare or uncommon responses as well.</h3>
                  </div>
                </div>
                <div class="col-md-6 text-center carouselcols">
                  <img src="sitefront/avatar.png">
                </div>
              </div>
            </div>
            <!-- slide 21 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 1:</h2>
                    <h3>After reviewing your solutions, think of products and/or services your company offer(s) or would like to offer and list them.</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 22 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 2:</h2>
                    <h3>Next to each product or service, list as many uses of the product and/or service that come to mind. (How can it be used by ou or others...)</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 23 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 3:</h2>
                    <h3>Take a moment to write your responses in complete sentences.</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 24 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 4:</h2>
                    <h3>"Lest's Discuss Your Responses!"</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 25 -->
            <div class="item">
              <div class="row">
                <div class="col-md-6 text-center carouselcols">
                  <div class="textcontext">
                    <h2>Exercise 3: Draw It!</h2>
                    <h3>You will be challenged in new ways to get your ideas on paper.</h3>
                  </div>
                </div>
                <div class="col-md-6 text-center carouselcols">
                  <img src="sitefront/avatar.png">
                </div>
              </div>
            </div>
            <!-- slide 26 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 1:</h2>
                    <h3>List in what job industry would you find your skills and solutions?</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 27 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 2:</h2>
                    <h3>Take a quick moment to visualize your client. Now, draw your ideal client, the meeting setting and the presentation you will give to your potential client.</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 28 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Step 3:</h2>
                    <h3>Write descriptions of your drawings in complete sentences.</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 29 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>"Let's Discuss..."</h2>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 30 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Exercise 4: Drafting Your Own Business Plan</h2>
                    <ul class="list-group">
                      <li class="list-group-item">Executive Summary</li>
                      <li class="list-group-item">Market Analysis</li>
                      <li class="list-group-item">Company Information</li>
                      <li class="list-group-item">Company Organization</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 31 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Based on the descriptions of the business plan elements, fill in your information.</h2>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 32 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>Exercise 5: Recapping what we have learned.</h2>
                    <h3>FUSE: Scenario: Putting what you've learned into action!</h3>
                    <h3>While engaging with your colleague, you meet someone who works at an organization of an ideal customer. The person inquiries your services. Based on the information you have completed in the workshop, how would you respond? Giving clear responses advances you to a meeting with their boss.</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 33 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12 text-center carouselcolsfull">
                  <div class="textcontext">
                    <h2>This concludes the Writing a Simple Business Plan workshop. We hope you have enjoyed yourselves. Please feel free to contact us to ask any questions.</h2>
                    <h1>Thank you for joining us!</h1>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-offset-2 col-md-8 col-sm-12">
        <button class="btn btn-default btn-lg custombtn" id="btnprev" style="float:left;">Previous</button>
        <button class="btn btn-default btn-lg custombtn" id="btnnext" style="float:right;">Next</button>
      </div>
    </div>
  </div>


@endsection


@section('template_script')
  <script type="text/javascript">
  $('#carousel-workshop').carousel({
      interval: false,
      wrap: false
  });

  $('#btnprev').click(function() {
      $('#carousel-workshop').carousel('prev')
  })

  $('#btnnext').click(function() {
      $('#carousel-workshop').carousel('next')
  })

  $('#userchoice').change(function() {
      // console.log($('#userchoice').val());
      if ($('#userchoice').val() == 1) {
          $('.carousel-container').css("visibility", "visible")
      } else {
          $('.carousel-container').css("visibility", "hidden")
      }
  })
  </script>
@endsection
