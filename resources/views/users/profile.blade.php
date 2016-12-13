@extends('layouts.app')
@section('title', 'Your profile')
@section('Sidebar', 'Your quick links')
@section('content')
                <img src="/images/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->name }}'s Profile</h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
                <div class="page-header">
  <h3></h3>
</div>
  
  
  
<div id="exTab2" class="row">	
<ul class="nav nav-tabs">
			<li class="active">
        <a  href="#profile" data-toggle="tab">Profile Details</a>
			</li>
			<li><a href="#messages" data-toggle="tab">Messages <span class="badge">{{Auth::user()->unreadNotifications->count()}}</span></a>
			</li>
			<li><a href="#reports" data-toggle="tab">Reports</a>
			</li>
		</ul>

			<div class="tab-content ">
			  <div class="tab-pane active" id="profile">
          <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
				</div>
				<div class="tab-pane" id="messages">
				<table class="table table-hover">
				
         @foreach ($user->notifications as $notification)
         <tr><td>
         @if ($notification->type == 'App\\Notifications\\tenantAdded')
   <a href=" {{ $notification->data['url'] }}">{{ 'New Tenant Added ' . $notification->data['tenant_id']}}</a>
  <?php $notification->markAsRead();?>
   
   @endif
   
   
   </td><td>
   @if ($notification->read_at == NULL)
   <strong>{{ 'New' }}</strong>
   @else
   {{ 'Opened' }}
   @endif
   </td>
   </tr>
 
@endforeach
</table>
   
 
				</div>
        <div class="tab-pane" id="reports">
        No reports
          
				</div>
			</div>
  </div>
                      
@endsection

