
    <style>
      body{
        overflow-x:hidden;



            }
      @media (max-width: 375px) {
        img{
          max-width:10rem !important;



        }}
    </style>
  @extends('layout.master')
  @section('content')

    <!-- About Us -->
    <div class="container-fluid my-5 ">
      <h1 class="text-center text-info mt-3"></h1>
      <div class="row mx-lg-5">
        <div
          class="card border-dark my-2 shadow"
          style="max-width: 40rem; height: auto"
        >
          <div class="card-header text-info">About Us</div>
          <div class="card-body text-dark">
            <h5 class="card-title">middle east jobs website</h5>
            <p class="card-text">
              Welcome to Wazeef.com - the Middle East jobs site, where you can
              search and apply for thousands of jobs published in all fields in
              the Middle East countries with ease. The Wazeef website displays
              job advertisements published by advertisers and business owners to
              act as an intermediary between them and the site’s visitors
              looking for job opportunities and vacancies, while providing the
              necessary means of communication between the two parties. Job
              Advertiser and Publisher, Start Searching Now!
            </p>
            <h5 class="card-title">Employers and publishers</h5>
            <p class="card-text">
              Through the Wazeef website service, you can publish your ad to
              thousands of job seekers from all the countries of the Middle East
              only on Wazief.com for free and without any expenses; Choose to
              publish your ad in any of the various sections of the site,
              whether the required specialization is professional, craftsman or
              technical, requires experience or prefers recent affiliations. The
              advertisement is sent within minutes to take advantage of the
              advantages provided, such as: communicating directly with the
              applicants, the possibility of stopping the advertisement at any
              time later. You will also be able to view and follow the
              statistics of your published ads, post your ad now!
            </p>
          </div>
        </div>
        <div class="card my-2  " style="max-width: 30rem ;">
          <div class="photo col-lg-6">
            <img
              src="image/aboutus.svg"
              class="d-block h-100 "
              style="max-width: 30rem"
              alt="..."
            />
          </div>
        </div>
      </div>
    </div>
    @stop
