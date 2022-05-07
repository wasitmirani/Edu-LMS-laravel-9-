@php
$sidebar=sideBarMenu();
@endphp

<div class="nk-sidebar-element">
    <div class="nk-sidebar-content">
       <div class="nk-sidebar-menu" data-simplebar="">
          <ul class="nk-menu">
            @foreach ($sidebar as $menu)
            @if(!empty($menu['single_link']))
             <li class="nk-menu-item">
                <router-link class="nk-menu-link"  to="{{$menu['single_link']['v-route']}}">

                    <span class="nk-menu-icon">
                      <em class="icon ni {{$menu['single_link']['icon']}}"></em></span>
                      <span class="nk-menu-text">{{ucfirst($menu['single_link']['title'])}}</span>
                 </router-link>
             </li>
            @endif
            @if(!empty($menu['menu']))
            {{-- @if(isset($menu['menu']['can'])) v-can="'{{$menu['menu']['can']}}'" @endif --}}
            <li class="nk-menu-item has-sub"  >
                <a href="#" class="nk-menu-link nk-menu-toggle"><span
                   class="nk-menu-icon"><em class="icon ni {{$menu['menu']['icon']}}"></em></span><span
                   class="nk-menu-text">{{$menu['menu']['title']}}</span></a>
                <ul class="nk-menu-sub">
                  @foreach ($menu['menu']['sub_menu'] as $item)
                  {{-- @if(isset($item['v-can'])) v-can="'{{$item['v-can']}}'" @endif --}}
                   <li class="nk-menu-item" >
                       <router-link to="{{$item['v-route']}}" class="nk-menu-link"><span
                      class="nk-menu-text">{{$item['title']}}</span></router-link>
                    </li>
                  @endforeach
                </ul>
             </li>
            @endif
            @endforeach
          </ul>
       </div>
    </div>
 </div>
