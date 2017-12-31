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
                <span class="icon" data-toggle="popover" data-placement="top" title="Smiles" ><i class="fa fa-smile-o fa-lg icon" aria-hidden="true"></i></span>
                <div class="message">
                    <input type="text" class="input-message" placeholder="Write a message">
                </div>
                <i class="fa fa-microphone fa-lg icon" aria-hidden="true"></i>
            </div>
        </section>
        <div id="popoverContent" style="display: none">
            <div>
                <table style="width:100%">
                    <tr>
                        <td width="25%">
                            <a title="smile.png" onclick="" href="#">
                                <img alt="smile.png" src="images/smiles/smile.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="wink.png" onclick="" href="#">
                                <img alt="wink.png" src="images/smiles/wink.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="tongue.png" onclick="" href="#">
                                <img alt="tongue.png" src="images/smiles/tongue.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="biggrin.png" onclick="" href="#">
                                <img alt="biggrin.png" src="images/smiles/biggrin.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="laugh.png" onclick="" href="#">
                                <img alt="laugh.png" src="images/smiles/laugh.png">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <a title="sad.png" onclick="" href="#">
                                <img alt="sad.png" src="images/smiles/sad.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="angry.png" onclick="" href="#">
                                <img alt="angry.png" src="images/smiles/angry.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="mellow.png" onclick="" href="#">
                                <img alt="mellow.png" src="images/smiles/mellow.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="huh.png" onclick="" href="#">
                                <img alt="huh.png" src="images/smiles/huh.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="happy.png" onclick="" href="#">
                                <img alt="happy.png" src="images/smiles/happy.png">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <a title="ohmy.png" onclick="" href="#">
                                <img alt="ohmy.png" src="images/smiles/ohmy.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="cool.png" onclick="" href="#">
                                <img alt="cool.png" src="images/smiles/cool.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="rolleyes.gif" onclick="" href="#">
                                <img alt="rolleyes.gif" src="images/smiles/rolleyes.gif">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="sleep.png" onclick="" href="#">
                                <img alt="sleep.png" src="images/smiles/sleep.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="dry.png" onclick="" href="#">
                                <img alt="dry.png" src="images/smiles/dry.png">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <a title="wub.png" onclick="" href="#">
                                <img alt="wub.png" src="images/smiles/wub.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="unsure.png" onclick="" href="#">
                                <img alt="unsure.png" src="images/smiles/unsure.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="wacko.png" onclick="" href="#">
                                <img alt="wacko.png" src="images/smiles/wacko.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="blink.png" onclick="" href="#">
                                <img alt="blink.png" src="images/smiles/blink.png">
                            </a>
                        </td>
                        <td width="25%">
                            <a title="bandit.png" onclick="" href="#">
                                <img alt="bandit.png" src="images/smiles/bandit.png">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection