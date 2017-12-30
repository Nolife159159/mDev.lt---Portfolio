@extends('layouts.app')

@section('title', ' - Messages!')

@section('content')
    <div class="wrap">
        <section class="left">
            <div class="profile">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/user.jpg">
                <div class="icons">
                    <i class="fa fa-commenting fa-lg icon" aria-hidden="true"></i>
                    <i class="fa fa-bars fa-lg icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="wrap-search">
                <div class="search">
                    <i class="fa fa-search fa icon" aria-hidden="true"></i>
                    <input type="text" class="input-search" placeholder="Search or start a new chat">
                </div>
            </div>
            <div class="contact-list">
            <div class="contact" id="6">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact7.JPG" alt="profilpicture">
                <div class="contact-preview">
                    <div class="contact-text">
                        <h1 class="font-name">Cool Kids</h1>
                    </div>
                </div>
                <div class="contact-time">
                    <p>17:54</p>
                </div>
            </div>
        </section>
        <section class="right">
            <div class="chat-head">
                <img alt="profilepicture" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact7.JPG">
                <div class="chat-name">
                    <h1 class="font-name">Cool Kids</h1>
                    <p class="font-online">Nelixus, katum</p>
                </div>
                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                <i class="fa fa-paperclip fa-lg" aria-hidden="true"></i>
                <i class="fa fa-bars fa-lg" aria-hidden="true" id="show-contact-information"></i>
                <i class="fa fa-times fa-lg" aria-hidden="true" id="close-contact-information"></i>
            </div>
            <div class="wrap-chat">
                <div class="chat">
                    <div class="chat-bubble you">
                        <div class="your-mouth">
                        </div>
                        <h4>Nelixus</h4>
                        <div class="content">Test</div>
                        <div class="time">17:40</div>
                    </div>
                    <div class="chat-bubble you">
                        <div class="your-mouth">
                        </div>
                        <h4>Nelixus</h4>
                        <div class="content">Test</div>
                        <div class="time">17:41</div>
                    </div>
                    <div class="chat-bubble you">
                        <div class="your-mouth">
                        </div>
                        <h4>Katum</h4>
                        <div class="content">Chat test</div>
                        <div class="time">17:43</div>
                    </div>
                    <div class="chat-bubble you">
                        <div class="your-mouth">
                        </div>
                        <h4>Nelixus</h4>
                        <div class="content">TestTestTestTestTestTest</div>
                        <div class="time">17:44</div>
                    </div>
                    <div class="chat-bubble you">
                        <div class="your-mouth">
                        </div>
                        <h4>Katum</h4>
                        <div class="content">chato front endo testas ;)</div>
                        <div class="time">17:47</div>
                    </div>
                    <div class="chat-bubble me">
                        <div class="my-mouth">
                        </div>
                        <div class="content">Front ender veikia gerai</div>
                        <div class="time">17:48</div>
                    </div>
                    <div class="chat-bubble you">
                        <div class="your-mouth">
                        </div>
                        <h4>katum</h4>
                        <div class="content">Hehehe</div>
                        <div class="time">17:50</div>
                    </div>
                    <div class="chat-bubble me">
                        <div class="my-mouth">
                        </div>
                        <div class="content">blabla!!</div>
                        <div class="time">17:53</div>
                    </div>
                </div>
                <div class="information" style="display: none;"></div>
            </div>
            <div class="wrap-message">
                <i class="fa fa-smile-o fa-lg icon" aria-hidden="true"></i>
                <div class="message">
                    <input type="text" class="input-message" placeholder="Write a message">
                </div>
                <i class="fa fa-microphone fa-lg icon" aria-hidden="true"></i>
            </div>

        </section>
    </div>
@endsection