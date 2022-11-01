<!-- Notifications -->
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning">{{count($notifications)}}</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have {{count($notifications)}} notifications</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                @foreach($notifications as $notification)
                    <li><!-- start message -->
                        <a>
                            <div class="pull-left"></div>
                            <h4>
                                {{$notification->name}} </h4>
                            <h4>
                                <small> expired at <i class="fa fa-clock-o"></i> {{$notification->expired_at->diffForHumans()}}</small>
                            </h4>
                            <p>{!! str_limit($notification->description,'40') !!}</p>
                            <h4> to
                                <small>{{($notification->agent)?$notification->agent->name:''}} </small>
                            </h4>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</li>
<!-- End Notifications -->
<li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-envelope-o"></i>
        <span class="label label-success">{{count($messages)}}</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have {{count($messages)}} messages</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <div class="slimScrollDiv"
                 style="position: relative; overflow: hidden; width: auto; height: 200px;">
                <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                    @foreach($messages as $message)
                        <li><!-- start message -->
                            <a>
                                <div class="pull-left"></div>
                                <h4>
                                    {{$message->name}}
                                    <small><i class="fa fa-clock-o"></i> {{$message->created_at->diffForHumans()}}</small>
                                </h4>
                                <p>{!! str_limit($message->message,'40') !!}</p>
                                <h4> to
                                    <small>{{($message->user)?$message->user->name:''}} </small>
                                </h4>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </li>
    </ul>
</li>