@extends('components.main')
@section('title',"Welcome to " . __('messages.name'))
@section('meta')
<meta name="title" content="@lang ('messages.mt')">
<meta name="description" content="@lang ('messages.md')">
<meta name="keyword" content="@lang ('messages.mk')">
@endsection

@section('body')
<x-top-component title="About Us" />

<div class="container heading mt-4">
    <div class="row">
        <div class="col-sm-6">
            <h2 class="">Our Experience</h2>
            <p>In a span of one decade, we passed through unique journey filled with versatile experience from concept
                creator
                to
                creative consultant, from program developer to presentation, from workshop organizer to workflow
                designer in the
                area of
                health sector and allied field in Nepal and abroad.</p>
        </div>
        {{-- <div class="offset-sm-1 col-sm-4"> --}}
        <div class="col-sm-6">
            <img src="{{asset('assets/images/exp.svg')}}" alt="Our Experiences" width="50%">
        </div>
    </div>

    <h3 class="mt-2">Our footprints</h3>
    <div class="row">
        <div class="col-md-6">
            <ul class="text-left" style="margin-top: 1.6rem; line-height: 1.8rem;">
                <li>Worked as a Consultant to Asia Meditech in verification process of Insurance Claim for Road Traffic
                    Accidents.</li>
                <li>
                    Worked as Medical consultant for
                    <ul>
                        <li>Shikhar Insurance Co. Ltd. (2019 February onwards)</li>
                        <li>Siddhartha Insurance Limited (2016-2017)</li>
                        <li>NLG Insurance Limited</li>
                        <li>Lumbini General Insurance Limited</li>
                        <li>Ajod Insurance Limited</li>
                        <li>Nepal Truck Transport Entrepreneurs Federation</li>
                        <li>Nepal Insurance Company Limited</li>
                        <li>Mediflow Solutions Pvt. Ltd.</li>
                    </ul>
                </li>
                <li>Worked in development of mobile applications for different institutions
                    <ul>
                        <li>Rotary Club 3292 </li>
                        <li>Nepal Medical Association</li>
                    </ul>

                </li>
                <li>Research finding on working with different Insurance Companies for the need of integrated IT tool
                    with EMR
                    has been
                    implemented with separate company named Mediflow solutions Pvt. Ltd.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <p class="mb-1">
                Developed concept of online search for health institutions and doctors through Health Concern website
                and
                offline search
                through mobile app 'Hospitals Nepal'. This mobile app has been downloaded by 30,000 users in 6 months of
                time.
                This app,
                first of its kind, can search and connect the chosen doctors or hospitals. All the stake-people, doctors
                and
                hospitals
                have given a strong feedback about this app.
            </p>
            <p class="no-margin">
                Organized Continued Medical Education for Bangkok Hospital, Thailand; Global Hospitals, India; Nova ivi
                Fertility
                Clinic, India; Apollo Hospitals, India, Amrita institute of Medical Science, Kerala, India.
            </p>
            <p class="no-margin">
                Have been participating and supporting international forum and conferences on global healthcare and
                medical
                tourism.
                Namely- International Medical Travel Exhibition and Conference (IMTEC), Malaysia Healthcare Travel
                Exhibition
                (MIHTE),
                Turkey Medical Tourism Forum, Arab Health, Advantage Healthcare India, 2017
            </p>
            <p class="no-margin">
                Has been serving as an active member of GHTC (Global Healthcare Travel Council) having 33 countries as
                members.
            </p>
            <p class="no-margin">
                Organized multi stakeholders' discussion workshops on topics of national importance namely, Medical
                Tourism and
                Health
                Journalism. Brainstorming discussion on Health Insurance and Transportation System.
            </p>
            <p class="no-margin">
                Organized Hospitals Insurance Meet –up, 2018
            </p>
            <p class="no-margin">
                Worked in Healthcare of Tourist with Nepal Medical association & Nepal Government.
                Policy making Covid care with WHO
            </p>
        </div>
    </div>
</div>
@endsection