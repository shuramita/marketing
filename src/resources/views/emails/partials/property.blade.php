<property>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr>
            <td valign="top" style="width: 120px;"  class="property">
                <a href='{{$property->link or '[PropertyLink]'}}{{$ga}}'>
                    <div class="image" style="background-image: url({{$property->thumb or "[PropertyImageThumbLink]"}});">
                        {{--<img src="{{$property->thumb or "[PropertyImageThumbLink]"}}" />--}}
                    </div>
                </a>
            </td>
            <td valign="top">
                <h4 class="property">
                    <a class="title" href="{{$property->link or "[PropertyLink]"}}{{$ga}}">
                        {{$property->title or "[PropertyTitle]"}}
                    </a>
                </h4>
                <ul class="property">
                    <li class="first"><span>{{$property->type or "[PropertyType]"}}</span></li>
                    <li><span>{{$property->size or "[PropertySize]"}}</span></li>
                    <li><span>{{$property->bed or "[BedRoom]"}}</span></li>
                    <li><span>{{$property->bath or "[BathRoom]"}}</span></li>
                </ul>
                <div class="property">
                    <span class="price">{{$property->price or "[PropertyPrice]"}}</span>
                </div>

            </td>
        </tr>
    </table>
    <br>
</property>
