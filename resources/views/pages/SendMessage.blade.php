{{-- @dd(session()) --}}

@if(request()['services'])
<h1>New Service Request</h1>
<p>A new service request has been submitted. Here are the details:</p>
<ul>
    <li><strong>Name:</strong> {{ request()['name'] }}</li>
    <li><strong>Email:</strong> {{ request()['email'] }}</li>
    <li><strong>Phone:</strong> {{ request()['phone'] }}</li>
    <li><strong>Service Requested:</strong> {{ request()['services'] }}</li>
    <li><strong>Message:</strong> {{ request()['message'] }}</li>
</ul>
<p>Please follow up with the requester to discuss their needs further.</p>

@else
    <p> this E-mail make subscribe in newsletter </p>
        <li> {{ request()['email'] }} </li>
@endif