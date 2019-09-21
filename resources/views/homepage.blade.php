<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Swipe – The Simplest Chat Platform</title>
	<meta name="description" content="#">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap core CSS -->
	<link href="{{asset('dist/css/lib/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
	<!-- Swipe core CSS -->
	<link href="{{asset('dist/css/swipe.min.css')}}" type="text/css" rel="stylesheet">
	<!-- Favicon -->
	<link href="{{asset('dist/img/favicon.png')}}" type="image/png" rel="icon">
</head>

<body>
	<main>
		<div class="layout">
			<!-- Start of Navigation -->
			<div class="navigation">
				<div class="container">
					<div class="inside">
						<div class="nav nav-tab menu">
							<button class="btn"><img class="avatar-xl" src="/userimage/{{$user->avatar}}"
									alt="avatar"></button>
							<a href="#members" data-toggle="tab"><i class="material-icons">account_circle</i></a>
							<a href="#discussions" data-toggle="tab" class="active"><i
									class="material-icons active">chat_bubble_outline</i></a>
							<a href="#notifications" data-toggle="tab" class="f-grow1"><i
									class="material-icons">notifications_none</i></a>
							<button class="btn mode"><i class="material-icons">brightness_2</i></button>
							<a href="#settings" data-toggle="tab"><i class="material-icons">settings</i></a>
							<button class="btn power" onclick="visitPage();"><i
									class="material-icons">power_settings_new</i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Navigation -->
			<!-- Start of Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="container">
					<div class="col-md-12">
						<div class="tab-content">
							<!-- Start of Contacts -->
							<div class="tab-pane fade" id="members">
								<div class="search">
									<form class="form-inline position-relative">
										<input type="search" class="form-control" id="text-chat"
											placeholder="Search for people...">
										<button type="button" class="btn btn-link loop"><i
												class="material-icons">search</i></button>
									</form>
									<button class="btn create" data-toggle="modal" data-target="#exampleModalCenter"><i
											class="material-icons">person_add</i></button>
								</div>
								<div class="list-group sort">
									<button class="btn filterMembersBtn active show" data-toggle="list"
										data-filter="all">All</button>
									<button class="btn filterMembersBtn" data-toggle="list"
										data-filter="online">Online</button>
									<button class="btn filterMembersBtn" data-toggle="list"
										data-filter="offline">Offline</button>
								</div>
								<div class="contacts">
									<h1>Contacts</h1>
									<div class="list-group" id="contacts" role="tablist">
										<a href="#" class="filterMembers all online contact" data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-1.jpg"
												data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Janette Dalton</h5>
												<p>Sofia, Bulgaria</p>
											</div>
											<div class="person-add">
												<i class="material-icons">person</i>
											</div>
										</a>
										<a href="#" class="filterMembers all online contact" data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-1.jpg"
												data-toggle="tooltip" data-placement="top" title="Michael" alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Michael Knudsen</h5>
												<p>Washington, USA</p>
											</div>
											<div class="person-add">
												<i class="material-icons">person</i>
											</div>
										</a>
										<a href="#" class="filterMembers all online contact" data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-2.jpg"
												data-toggle="tooltip" data-placement="top" title="Lean" alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Lean Avent</h5>
												<p>Shanghai, China</p>
											</div>
											<div class="person-add">
												<i class="material-icons">person</i>
											</div>
										</a>
										<a href="#" class="filterMembers all online contact" data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-2.jpg"
												data-toggle="tooltip" data-placement="top" title="Mariette"
												alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Mariette Toles</h5>
												<p>Helena, Montana</p>
											</div>
											<div class="person-add">
												<i class="material-icons">person</i>
											</div>
										</a>
										<a href="#" class="filterMembers all online contact" data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-3.jpg"
												data-toggle="tooltip" data-placement="top" title="Harmony" alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Harmony Otero</h5>
												<p>Indore, India</p>
											</div>
											<div class="person-add">
												<i class="material-icons">person</i>
											</div>
										</a>
										<a href="#" class="filterMembers all offline contact" data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg"
												data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Keith Morris</h5>
												<p>Chisinau, Moldova</p>
											</div>
											<div class="person-add">
												<i class="material-icons">person</i>
											</div>
										</a>
										<a href="#" class="filterMembers all offline contact" data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-6.jpg"
												data-toggle="tooltip" data-placement="top" title="Louis" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Louis Martinez</h5>
												<p>Vienna, Austria</p>
											</div>
											<div class="person-add">
												<i class="material-icons">person</i>
											</div>
										</a>
										<a href="#" class="filterMembers all offline contact" data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-3.jpg"
												data-toggle="tooltip" data-placement="top" title="Ryan" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Ryan Foster</h5>
												<p>Oslo, Norway</p>
											</div>
											<div class="person-add">
												<i class="material-icons">person</i>
											</div>
										</a>
										<a href="#" class="filterMembers all offline contact" data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-4.jpg"
												data-toggle="tooltip" data-placement="top" title="Mildred" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Mildred Bennett</h5>
												<p>London, United Kingdom</p>
											</div>
											<div class="person-add">
												<i class="material-icons">person</i>
											</div>
										</a>
									</div>
								</div>
							</div>
							<!-- End of Contacts -->
							<!-- Start of Discussions -->
							<div id="discussions" class="tab-pane fade active show">
								<div class="search">
									<form class="form-inline position-relative">
										<input type="search" class="form-control" id="conversations"
											placeholder="Search for conversations...">
										<button type="button" class="btn btn-link loop"><i
												class="material-icons">search</i></button>
									</form>
									<button class="btn create" data-toggle="modal" data-target="#startnewchat"><i
											class="material-icons">create</i></button>
								</div>
								<div class="list-group sort">
									<button class="btn filterDiscussionsBtn active show" data-toggle="list"
										data-filter="all">All</button>
									<button class="btn filterDiscussionsBtn" data-toggle="list"
										data-filter="read">Read</button>
									<button class="btn filterDiscussionsBtn" data-toggle="list"
										data-filter="unread">Unread</button>
								</div>
								<div class="discussions">
									<h1>Discussions</h1>
									<div class="list-group" id="chats" role="tablist">
										{{--  <a href="#list-chat" class="filterDiscussions all unread single active "
											id="list-chat-list" data-toggle="list" role="tab">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-1.jpg"
												data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="new bg-yellow">
												<span>+7</span>
											</div>
											<div class="data">
												<h5>Janette Dalton</h5>
												<span>Mon</span>
												<p>A new feature has been updated to your account. Check it out...</p>
											</div>
										</a>  --}}
										@foreach ($allusers as $item)
											@if ($loop->first)
												<a href="#chat-{{$item->id}}" class="filterDiscussions all unread single active"
													id="user-{{$item->id}}" data-toggle="list" role="tab"  data-user-id="{{$item->id}}">
													<img class="avatar-md" src="/userimage/{{$item->avatar}}"
														data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
													<div class="status">
														<i class="material-icons online">fiber_manual_record</i>
													</div>
													<div class="new bg-yellow">
														<span>+7</span>
													</div>
													<div class="data">
														<h5>{{$item->name}}</h5>
														<span>Mon</span>
														<p>Check out for new messages</p>
													</div>
												</a>
											@else
											 <a href="#chat-{{$item->id}}" class="filterDiscussions all unread single"
												id="user-{{$item->id}}" data-toggle="list" role="tab" data-user-id="{{$item->id}}">
												<img class="avatar-md" src="/userimage/{{$item->avatar}}"
													data-toggle="tooltip" data-placement="top" title="{{$item->name}}" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="new bg-pink">
													<span>+10</span>
												</div>
												<div class="data">
													<h5>{{$item->name}}</h5>
													<span>Sun</span>
													<p>check out for more messages</p>
												</div>
											</a>
											@endif
										@endforeach
										{{--  <a href="#list-empty" class="filterDiscussions all unread single"
											id="list-empty-list" data-toggle="list" role="tab">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-1.jpg"
												data-toggle="tooltip" data-placement="top" title="Michael" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="new bg-pink">
												<span>+10</span>
											</div>
											<div class="data">
												<h5>Michael Knudsen</h5>
												<span>Sun</span>
												<p>How can i improve my chances of getting a deposit?</p>
											</div>
										</a>
										<a href="#list-chat" class="filterDiscussions all read single"
											id="list-chat-list2" data-toggle="list" role="tab">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-2.jpg"
												data-toggle="tooltip" data-placement="top" title="Lean" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Lean Avent</h5>
												<span>Tus</span>
												<p>Hey Chris, could i ask you to help me out with variation...</p>
											</div>
										</a>
										<a href="#list-empty" class="filterDiscussions all read single"
											id="list-empty-list2" data-toggle="list" role="tab">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-2.jpg"
												data-toggle="tooltip" data-placement="top" title="Mariette"
												alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Mariette Toles</h5>
												<span>5 mins</span>
												<p>By injected humour, or randomised words which...</p>
											</div>
										</a>
										<a href="#list-chat" class="filterDiscussions all read single"
											id="list-chat-list3" data-toggle="list" role="tab">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-3.jpg"
												data-toggle="tooltip" data-placement="top" title="Harmony" alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Harmony Otero</h5>
												<span>Mon</span>
												<p>No more running out of the office at 4pm on Fridays!</p>
											</div>
										</a>
										<a href="#list-empty" class="filterDiscussions all read single"
											id="list-empty-list3" data-toggle="list" role="tab">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg"
												data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Keith Morris</h5>
												<span>Fri</span>
												<p>All your favourite books at your reach! We are now mobile.</p>
											</div>
										</a>
										<a href="#list-request" class="filterDiscussions all unread single"
											id="list-request-list" data-toggle="list" role="tab">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-6.jpg"
												data-toggle="tooltip" data-placement="top" title="Louis" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="new bg-gray">
												<span>?</span>
											</div>
											<div class="data">
												<h5>Louis Martinez</h5>
												<span>Feb 10</span>
												<p>Hi Keith, Id like to add you as a contact.</p>
											</div>
										</a>
										<a href="#list-empty" class="filterDiscussions all read single"
											id="list-empty-list4" data-toggle="list" role="tab">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-3.jpg"
												data-toggle="tooltip" data-placement="top" title="Ryan" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5>Ryan Foster</h5>
												<span>Feb 9</span>
												<p>Dear Deborah, your Thai massage is today at 5pm.</p>
											</div>
										</a>
										<a href="#list-chat" class="filterDiscussions all unread single"
											id="list-chat-list5" data-toggle="list" role="tab">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-4.jpg"
												data-toggle="tooltip" data-placement="top" title="Mildred" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="new bg-green">
												<span>+9</span>
											</div>
											<div class="data">
												<h5>Mildred Bennett</h5>
												<span>Thu</span>
												<p>Unfortunately your session today has been cancelled!</p>
											</div>
										</a>  --}}
									</div>
								</div>
							</div>
							<!-- End of Discussions -->
							<!-- Start of Notifications -->
							<div id="notifications" class="tab-pane fade">
								<div class="search">
									<form class="form-inline position-relative">
										<input type="search" class="form-control" id="notice"
											placeholder="Filter notifications...">
										<button type="button" class="btn btn-link loop"><i
												class="material-icons filter-list">filter_list</i></button>
									</form>
								</div>
								<div class="list-group sort">
									<button class="btn filterNotificationsBtn active show" data-toggle="list"
										data-filter="all">All</button>
									<button class="btn filterNotificationsBtn" data-toggle="list"
										data-filter="latest">Latest</button>
									<button class="btn filterNotificationsBtn" data-toggle="list"
										data-filter="oldest">Oldest</button>
								</div>
								<div class="notifications">
									<h1>Notifications</h1>
									<div class="list-group" id="alerts" role="tablist">
										<a href="#" class="filterNotifications all latest notification"
											data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-1.jpg"
												data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<p>Janette has accepted your friend request on Swipe.</p>
												<span>Oct 17, 2018</span>
											</div>
										</a>
										<a href="#" class="filterNotifications all latest notification"
											data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-1.jpg"
												data-toggle="tooltip" data-placement="top" title="Michael" alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<p>Michael, you have a new friend suggestion today.</p>
												<span>Jun 21, 2018</span>
											</div>
										</a>
										<a href="#" class="filterNotifications all latest notification"
											data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-2.jpg"
												data-toggle="tooltip" data-placement="top" title="Mariette"
												alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<p>Mariette have just sent you a new message.</p>
												<span>Feb 15, 2018</span>
											</div>
										</a>
										<a href="#" class="filterNotifications all latest notification"
											data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-6.jpg"
												data-toggle="tooltip" data-placement="top" title="Louis" alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<p>Louis has a birthday today. Wish her all the best.</p>
												<span>Mar 23, 2018</span>
											</div>
										</a>
										<a href="#" class="filterNotifications all latest notification"
											data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-3.jpg"
												data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<p>Harmony has accepted your friend request on Swipe.</p>
												<span>Jan 5, 2018</span>
											</div>
										</a>
										<a href="#" class="filterNotifications all oldest notification"
											data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg"
												data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<p>Keith have just sent you a new message.</p>
												<span>Dec 22, 2017</span>
											</div>
										</a>
										<a href="#" class="filterNotifications all oldest notification"
											data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-2.jpg"
												data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<p>Michael, you have a new friend suggestion today.</p>
												<span>Nov 29, 2017</span>
											</div>
										</a>
										<a href="#" class="filterNotifications all oldest notification"
											data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-3.jpg"
												data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<p>Ryan have just sent you a new message.</p>
												<span>Sep 31, 2017</span>
											</div>
										</a>
										<a href="#" class="filterNotifications all oldest notification"
											data-toggle="list">
											<img class="avatar-md" src="dist/img/avatars/avatar-male-4.jpg"
												data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<p>Mildred has a birthday today. Wish him all the best.</p>
												<span>Jul 19, 2017</span>
											</div>
										</a>
									</div>
								</div>
							</div>
							<!-- End of Notifications -->
							<!-- Start of Settings -->
							<div class="tab-pane fade" id="settings">
								<div class="settings">
									<div class="profile">
										<img class="avatar-xl" src="/userimage/{{$user->avatar}}" alt="avatar">
										<h1><a href="#">{{$user->name}}</a></h1>
										<div class="stats">
											<div class="item">
												<h2>122</h2>
												<h3>Fellas</h3>
											</div>
											<div class="item">
												<h2>305</h2>
												<h3>Chats</h3>
											</div>
											<div class="item">
												<h2>1538</h2>
												<h3>Posts</h3>
											</div>
										</div>
									</div>
									<div class="categories" id="accordionSettings">
										<h1>Settings</h1>
										<!-- Start of My Account -->
										<div class="category">
											<a href="#" class="title collapsed" id="headingOne" data-toggle="collapse"
												data-target="#collapseOne" aria-expanded="true"
												aria-controls="collapseOne">
												<i class="material-icons md-30 online">person_outline</i>
												<div class="data">
													<h5>My Account</h5>
													<p>Update your profile details</p>
												</div>
												<i class="material-icons">keyboard_arrow_right</i>
											</a>
											<div class="collapse" id="collapseOne" aria-labelledby="headingOne"
												data-parent="#accordionSettings">
												<div class="content">
													<form action="{{route('uploadAvatar')}}" method="post"
														enctype="multipart/form-data">
														{{ csrf_field() }}
														<div class="upload">
															<div class="data">
																<img class="avatar-xl"
																	src="/userimage/{{$user->avatar}}" alt="image">
																<label>
																	<input type="file" id="UserAvatar"
																		name="UserAvatar">
																	<span class="btn button">Upload avatar</span>
																</label>
															</div>
															<div class="data">
																<label>
																	<input type="submit">
																	<span class="btn button">Submit Image</span>
																</label>
															</div>

															<p>For best results, image must be at least 256px by 256px
																in
																either .jpg or .png format!</p>
														</div>
													</form>
													<form action="{{route('updateUser')}}" method="POST">
														{{ csrf_field() }}
														<div class="parent">
															<div class="field">
																<label for="UserName">User name <span>*</span></label>
																<input type="text" class="form-control" id="UserName"
																	name="UserName" placeholder="User name"
																	value="{{$user->name}}" required>
															</div>
														</div>
														<button class="btn btn-link w-100">Delete Account</button>
														<button type="submit" class="btn button w-100">Apply</button>
													</form>
												</div>
											</div>
										</div>
										<!-- End of My Account -->
										<!-- Start of Chat History -->
										<div class="category">
											<a href="#" class="title collapsed" id="headingTwo" data-toggle="collapse"
												data-target="#collapseTwo" aria-expanded="true"
												aria-controls="collapseTwo">
												<i class="material-icons md-30 online">mail_outline</i>
												<div class="data">
													<h5>Chats</h5>
													<p>Check your chat history</p>
												</div>
												<i class="material-icons">keyboard_arrow_right</i>
											</a>
											<div class="collapse" id="collapseTwo" aria-labelledby="headingTwo"
												data-parent="#accordionSettings">
												<div class="content layer">
													<div class="history">
														<p>When you clear your conversation history, the messages will
															be deleted from your own
															device.</p>
														<p>The messages wont be deleted or cleared on the devices of
															the people you chatted with.
														</p>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input"
																id="same-address">
															<label class="custom-control-label" for="same-address">Hide
																will remove your chat history
																from the recent list.</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input"
																id="save-info">
															<label class="custom-control-label" for="save-info">Delete
																will remove your chat history
																from the device.</label>
														</div>
														<button type="submit" class="btn button w-100">Clear
															blah-blah</button>
													</div>
												</div>
											</div>
										</div>
										<!-- End of Chat History -->
										<!-- Start of Notifications Settings -->
										<div class="category">
											<a href="#" class="title collapsed" id="headingThree" data-toggle="collapse"
												data-target="#collapseThree" aria-expanded="true"
												aria-controls="collapseThree">
												<i class="material-icons md-30 online">notifications_none</i>
												<div class="data">
													<h5>Notifications</h5>
													<p>Turn notifications on or off</p>
												</div>
												<i class="material-icons">keyboard_arrow_right</i>
											</a>
											<div class="collapse" id="collapseThree" aria-labelledby="headingThree"
												data-parent="#accordionSettings">
												<div class="content no-layer">
													<div class="set">
														<div class="details">
															<h5>Desktop Notifications</h5>
															<p>You can set up Swipe to receive notifications when you
																have new messages.</p>
														</div>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<div class="set">
														<div class="details">
															<h5>Unread Message Badge</h5>
															<p>If enabled shows a red badge on the Swipe app icon when
																you have unread messages.</p>
														</div>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<div class="set">
														<div class="details">
															<h5>Taskbar Flashing</h5>
															<p>Flashes the Swipe app on mobile in your taskbar when you
																have new notifications.</p>
														</div>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
													<div class="set">
														<div class="details">
															<h5>Notification Sound</h5>
															<p>Set the app to alert you via notification sound when you
																have unread messages.</p>
														</div>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<div class="set">
														<div class="details">
															<h5>Vibrate</h5>
															<p>Vibrate when receiving new messages (Ensure system
																vibration is also enabled).</p>
														</div>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
													<div class="set">
														<div class="details">
															<h5>Turn On Lights</h5>
															<p>When someone send you a text message you will receive
																alert via notification light.</p>
														</div>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<!-- End of Notifications Settings -->
										<!-- Start of Connections -->
										<div class="category">
											<a href="#" class="title collapsed" id="headingFour" data-toggle="collapse"
												data-target="#collapseFour" aria-expanded="true"
												aria-controls="collapseFour">
												<i class="material-icons md-30 online">sync</i>
												<div class="data">
													<h5>Connections</h5>
													<p>Sync your social accounts</p>
												</div>
												<i class="material-icons">keyboard_arrow_right</i>
											</a>
											<div class="collapse" id="collapseFour" aria-labelledby="headingFour"
												data-parent="#accordionSettings">
												<div class="content">
													<div class="app">
														<img src="dist/img/integrations/slack.svg" alt="app">
														<div class="permissions">
															<h5>Skrill</h5>
															<p>Read, Write, Comment</p>
														</div>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<div class="app">
														<img src="dist/img/integrations/dropbox.svg" alt="app">
														<div class="permissions">
															<h5>Dropbox</h5>
															<p>Read, Write, Upload</p>
														</div>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<div class="app">
														<img src="dist/img/integrations/drive.svg" alt="app">
														<div class="permissions">
															<h5>Google Drive</h5>
															<p>No permissions set</p>
														</div>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
													<div class="app">
														<img src="dist/img/integrations/trello.svg" alt="app">
														<div class="permissions">
															<h5>Trello</h5>
															<p>No permissions set</p>
														</div>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<!-- End of Connections -->
										<!-- Start of Appearance Settings -->
										<div class="category">
											<a href="#" class="title collapsed" id="headingFive" data-toggle="collapse"
												data-target="#collapseFive" aria-expanded="true"
												aria-controls="collapseFive">
												<i class="material-icons md-30 online">colorize</i>
												<div class="data">
													<h5>Appearance</h5>
													<p>Customize the look of Swipe</p>
												</div>
												<i class="material-icons">keyboard_arrow_right</i>
											</a>
											<div class="collapse" id="collapseFive" aria-labelledby="headingFive"
												data-parent="#accordionSettings">
												<div class="content no-layer">
													<div class="set">
														<div class="details">
															<h5>Turn Off Lights</h5>
															<p>The dark mode is applied to core areas of the app that
																are normally displayed as light.
															</p>
														</div>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round mode"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<!-- End of Appearance Settings -->
										<!-- Start of Language -->
										<div class="category">
											<a href="#" class="title collapsed" id="headingSix" data-toggle="collapse"
												data-target="#collapseSix" aria-expanded="true"
												aria-controls="collapseSix">
												<i class="material-icons md-30 online">language</i>
												<div class="data">
													<h5>Language</h5>
													<p>Select preferred language</p>
												</div>
												<i class="material-icons">keyboard_arrow_right</i>
											</a>
											<div class="collapse" id="collapseSix" aria-labelledby="headingSix"
												data-parent="#accordionSettings">
												<div class="content layer">
													<div class="language">
														<label for="country">Language</label>
														<select class="custom-select" id="country" required>
															<option value="">Select an language...</option>
															<option>English, UK</option>
															<option>English, US</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<!-- End of Language -->
										<!-- Start of Privacy & Safety -->
										<div class="category">
											<a href="#" class="title collapsed" id="headingSeven" data-toggle="collapse"
												data-target="#collapseSeven" aria-expanded="true"
												aria-controls="collapseSeven">
												<i class="material-icons md-30 online">lock_outline</i>
												<div class="data">
													<h5>Privacy & Safety</h5>
													<p>Control your privacy settings</p>
												</div>
												<i class="material-icons">keyboard_arrow_right</i>
											</a>
											<div class="collapse" id="collapseSeven" aria-labelledby="headingSeven"
												data-parent="#accordionSettings">
												<div class="content no-layer">
													<div class="set">
														<div class="details">
															<h5>Keep Me Safe</h5>
															<p>Automatically scan and delete direct messages you receive
																from everyone that contain
																explict content.</p>
														</div>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
													<div class="set">
														<div class="details">
															<h5>My Friends Are Nice</h5>
															<p>If enabled scans direct messages from everyone unless
																they are listed as your friend.
															</p>
														</div>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<div class="set">
														<div class="details">
															<h5>Everyone can add me</h5>
															<p>If enabled anyone in or out your friends of friends list
																can send you a friend request.
															</p>
														</div>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<div class="set">
														<div class="details">
															<h5>Friends of Friends</h5>
															<p>Only your friends or your mutual friends will be able to
																send you a friend reuqest.</p>
														</div>
														<label class="switch">
															<input type="checkbox" checked>
															<span class="slider round"></span>
														</label>
													</div>
													<div class="set">
														<div class="details">
															<h5>Data to Improve</h5>
															<p>This settings allows us to uses and process information
																for analytical purposes.</p>
														</div>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
													<div class="set">
														<div class="details">
															<h5>Data to Customize</h5>
															<p>This settings allows us to uses your information to
																customize Swipe for you.</p>
														</div>
														<label class="switch">
															<input type="checkbox">
															<span class="slider round"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<!-- End of Privacy & Safety -->
										<!-- Start of Logout -->
										<div class="category">
											<a href="sign-in.html" class="title collapsed">
												<i class="material-icons md-30 online">power_settings_new</i>
												<div class="data">
													<h5>Power Off</h5>
													<p>Log out of your account</p>
												</div>
												<i class="material-icons">keyboard_arrow_right</i>
											</a>
										</div>
										<!-- End of Logout -->
									</div>
								</div>
							</div>
							<!-- End of Settings -->
						</div>
					</div>
				</div>
			</div>
			<!-- End of Sidebar -->
			<!-- Start of Add Friends -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="requests">
						<div class="title">
							<h1>Add your friends</h1>
							<button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i
									class="material-icons">close</i></button>
						</div>
						<div class="content">
							<form>
								<div class="form-group">
									<label for="user">Username:</label>
									<input type="text" class="form-control" id="user" placeholder="Add recipient..."
										required>
									<div class="user" id="contact">
										<img class="avatar-sm" src="dist/img/avatars/avatar-female-5.jpg" alt="avatar">
										<h5>Keith Morris</h5>
										<button class="btn"><i class="material-icons">close</i></button>
									</div>
								</div>
								<div class="form-group">
									<label for="welcome">Message:</label>
									<textarea class="text-control" id="welcome"
										placeholder="Send your welcome message...">Hi Keith, Id like to add you as a contact.</textarea>
								</div>
								<button type="submit" class="btn button w-100">Send Friend Request</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Add Friends -->
			<!-- Start of Create Chat -->
			<div class="modal fade" id="startnewchat" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="requests">
						<div class="title">
							<h1>Start new chat</h1>
							<button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i
									class="material-icons">close</i></button>
						</div>
						<div class="content">
							<form>
								<div class="form-group">
									<label for="participant">Recipient:</label>
									<input type="text" class="form-control" id="participant"
										placeholder="Add recipient..." required>
									<div class="user" id="recipient">
										<img class="avatar-sm" src="dist/img/avatars/avatar-female-5.jpg" alt="avatar">
										<h5>Keith Morris</h5>
										<button class="btn"><i class="material-icons">close</i></button>
									</div>
								</div>
								<div class="form-group">
									<label for="topic">Topic:</label>
									<input type="text" class="form-control" id="topic" placeholder="What's the topic?"
										required>
								</div>
								<div class="form-group">
									<label for="message">Message:</label>
									<textarea class="text-control" id="message"
										placeholder="Send your welcome message...">Hmm, are you friendly?</textarea>
								</div>
								<button type="submit" class="btn button w-100">Start New Chat</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Create Chat -->
			<div class="main">
				<div class="tab-content" id="nav-tabContent">
					{{--  <div class="babble tab-pane fade" id="chat-{{$item->id}}" role="tabpanel" aria-labelledby="user-{{$item->id}}">
						<!-- Start of Chat -->
						<div class="chat" id="chat{{$item->id}}">
							<div class="top">
								<div class="container">
									<div class="col-md-12">
										<div class="inside">
											<a href="#"><img class="avatar-md"
													src="/userimage/{{$item->avatar}}" data-toggle="tooltip"
													data-placement="top" title="Lean" alt="avatar"></a>
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5><a href="#">{{$item->name}}</a></h5>
												<span>Inactive</span>
											</div>
											<button class="btn connect d-md-block d-none" name="2"><i
													class="material-icons md-30">phone_in_talk</i></button>
											<button class="btn connect d-md-block d-none" name="2"><i
													class="material-icons md-36">videocam</i></button>
											<button class="btn d-md-block d-none"><i
													class="material-icons md-30">info</i></button>
											<div class="dropdown">
												<button class="btn" data-toggle="dropdown" aria-haspopup="true"
													aria-expanded="false"><i
														class="material-icons md-30">more_vert</i></button>
												<div class="dropdown-menu dropdown-menu-right">
													<button class="dropdown-item connect" name="2"><i
															class="material-icons">phone_in_talk</i>Voice Call</button>
													<button class="dropdown-item connect" name="2"><i
															class="material-icons">videocam</i>Video
														Call</button>
													<hr>
													<button class="dropdown-item"><i
															class="material-icons">clear</i>Clear History</button>
													<button class="dropdown-item"><i
															class="material-icons">block</i>Block Contact</button>
													<button class="dropdown-item"><i
															class="material-icons">delete</i>Delete Contact</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="content empty">
								<div class="container">
									<div class="col-md-12">
										<div class="no-messages">
											<i class="material-icons md-48">forum</i>
											<p>Seems people are shy to start the chat. Break the ice send the first
												message.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="col-md-12">
									<div class="bottom">
										<form class="position-relative w-100">
											<textarea class="form-control" placeholder="Start typing for reply..."
												rows="1"></textarea>
											<button class="btn emoticons"><i
													class="material-icons">insert_emoticon</i></button>
											<button type="submit" class="btn send"><i
													class="material-icons">send</i></button>
										</form>
										<label>
											<input type="file">
											<span class="btn attach d-sm-block d-none"><i
													class="material-icons">attach_file</i></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Chat -->
						<!-- Start of Call -->
						<div class="call" id="call2">
							<div class="content">
								<div class="container">
									<div class="col-md-12">
										<div class="inside">
											<div class="panel">
												<div class="participant">
													<img class="avatar-xxl" src="dist/img/avatars/avatar-female-2.jpg"
														alt="avatar">
													<span>Connecting</span>
												</div>
												<div class="options">
													<button class="btn option"><i
															class="material-icons md-30">mic</i></button>
													<button class="btn option"><i
															class="material-icons md-30">videocam</i></button>
													<button class="btn option call-end"><i
															class="material-icons md-30">call_end</i></button>
													<button class="btn option"><i
															class="material-icons md-30">person_add</i></button>
													<button class="btn option"><i
															class="material-icons md-30">volume_up</i></button>
												</div>
												<button class="btn back" name="2"><i
														class="material-icons md-24">chat</i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Call -->
					</div>  --}}
					<!-- Start of Babble -->
					@foreach ($allusers as $item)

					<!-- Start of Babble -->
					<div class="babble tab-pane fade active show" id="chat-{{$item->id}}" role="tabpanel"
						aria-labelledby="user-{{$item->id}}">
						<!-- Start of Chat -->
						<div class="chat" id="chat{{$item->id}}">
							<div class="top">
								<div class="container">
									<div class="col-md-12">
										<div class="inside">
											<a href="#"><img class="avatar-md"
													src="/userimage/{{$item->avatar}}" data-toggle="tooltip"
													data-placement="top" title="Keith" alt="avatar"></a>
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5><a href="#">{{$item->name}}</a></h5>
												<span>Active now</span>
											</div>
											<button class="btn connect d-md-block d-none" name="1"><i
													class="material-icons md-30">phone_in_talk</i></button>
											<button class="btn connect d-md-block d-none" name="1"><i
													class="material-icons md-36">videocam</i></button>
											<button class="btn d-md-block d-none"><i
													class="material-icons md-30">info</i></button>
											<div class="dropdown">
												<button class="btn" data-toggle="dropdown" aria-haspopup="true"
													aria-expanded="false"><i
														class="material-icons md-30">more_vert</i></button>
												<div class="dropdown-menu dropdown-menu-right">
													<button class="dropdown-item connect" name="1"><i
															class="material-icons">phone_in_talk</i>Voice Call</button>
													<button class="dropdown-item connect" name="1"><i
															class="material-icons">videocam</i>Video
														Call</button>
													<hr>
													<button class="dropdown-item"><i
															class="material-icons">clear</i>Clear History</button>
													<button class="dropdown-item"><i
															class="material-icons">block</i>Block Contact</button>
													<button class="dropdown-item" id="videosharing"
														data_video="false"><i class="material-icons">block</i>Video
														Sharing</button>
													<button class="dropdown-item"><i
															class="material-icons">delete</i>Delete Contact</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="content" id="content">
								<div class="container">
									<div class="col-md-12">
										<div class="date">
											<hr>
											<span>Today</span>
											<hr>
										</div>


{{-- continue from here --}}


										<div class="message">
											<div class="text-main">
												<img id="recieverimage" />
												<span><i class="material-icons">check</i>10:21 PM</span>
											</div>
										</div>
										<div class="message me">
											<div class="text-main">
												<img id="senderimage" />
												<span><i class="material-icons">check</i>10:21 PM</span>
											</div>
										</div>
										<div class="message" id="on-typing">
											<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg"
												data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar"
												id="on-typing-avatar">
											<div class="text-main">
												<div class="text-group">
													<div class="text typing">
														<div class="wave">
															<span class="dot"></span>
															<span class="dot"></span>
															<span class="dot"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="col-md-12">
									<div class="bottom">
										<div class="position-relative w-100">
											<textarea class="form-control" id="text-chat"
												placeholder="Start typing for reply..." rows="1"></textarea>
											<button class="btn emoticons"><i
													class="material-icons">insert_emoticon</i></button>
											<button type="button" class="btn send" id="submit-chat"><i
													class="material-icons">send</i></button>
										</div>
										<label>
											<input type="file" id="file-attachment-stream">
											<span class="btn attach d-sm-block d-none"><i
													class="material-icons">attach_file</i></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Chat -->
						<!-- Start of Call -->
						<div class="call" id="call1">
							<div class="content">
								<div class="container">
									<div class="col-md-12">
										<div class="inside">
											<div class="panel">
												<div class="participant">
													<img class="avatar-xxl" src="dist/img/avatars/avatar-female-5.jpg"
														alt="avatar">
													<span>Connecting</span>
												</div>
												<div class="options">
													<button class="btn option"><i
															class="material-icons md-30">mic</i></button>
													<button class="btn option"><i
															class="material-icons md-30">videocam</i></button>
													<button class="btn option call-end"><i
															class="material-icons md-30">call_end</i></button>
													<button class="btn option"><i
															class="material-icons md-30">person_add</i></button>
													<button class="btn option"><i
															class="material-icons md-30">volume_up</i></button>
												</div>
												<button class="btn back" name="1"><i
														class="material-icons md-24">chat</i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Call -->
					</div>
					<!-- End of Babble -->



					@endforeach
					<!-- End of Babble -->
					<!-- Start of Babble -->
					{{--  <div class="babble tab-pane fade" id="list-request" role="tabpanel"
						aria-labelledby="list-request-list">
						<!-- Start of Chat -->
						<div class="chat" id="chat3">
							<div class="top">
								<div class="container">
									<div class="col-md-12">
										<div class="inside">
											<a href="#"><img class="avatar-md"
													src="dist/img/avatars/avatar-female-6.jpg" data-toggle="tooltip"
													data-placement="top" title="Louis" alt="avatar"></a>
											<div class="status">
												<i class="material-icons offline">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5><a href="#">Louis Martinez</a></h5>
												<span>Inactive</span>
											</div>
											<button class="btn disabled d-md-block d-none" disabled><i
													class="material-icons md-30">phone_in_talk</i></button>
											<button class="btn disabled d-md-block d-none" disabled><i
													class="material-icons md-36">videocam</i></button>
											<button class="btn d-md-block disabled d-none" disabled><i
													class="material-icons md-30">info</i></button>
											<div class="dropdown">
												<button class="btn disabled" data-toggle="dropdown" aria-haspopup="true"
													aria-expanded="false" disabled><i
														class="material-icons md-30">more_vert</i></button>
												<div class="dropdown-menu dropdown-menu-right">
													<button class="dropdown-item"><i
															class="material-icons">phone_in_talk</i>Voice Call</button>
													<button class="dropdown-item"><i
															class="material-icons">videocam</i>Video Call</button>
													<hr>
													<button class="dropdown-item"><i
															class="material-icons">clear</i>Clear History</button>
													<button class="dropdown-item"><i
															class="material-icons">block</i>Block Contact</button>
													<button class="dropdown-item"><i
															class="material-icons">delete</i>Delete Contact</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="content empty">
								<div class="container">
									<div class="col-md-12">
										<div class="no-messages request">
											<a href="#"><img class="avatar-xl"
													src="dist/img/avatars/avatar-female-6.jpg" data-toggle="tooltip"
													data-placement="top" title="Louis" alt="avatar"></a>
											<h5>Louis Martinez would like to add you as a contact. <span>Hi Keith, Id
													like to add you as a
													contact.</span></h5>
											<div class="options">
												<button class="btn button"><i class="material-icons">check</i></button>
												<button class="btn button"><i class="material-icons">close</i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="col-md-12">
									<div class="bottom">
										<form class="position-relative w-100">
											<textarea class="form-control" placeholder="Messaging unavailable" rows="1"
												disabled></textarea>
											<button class="btn emoticons disabled" disabled><i
													class="material-icons">insert_emoticon</i></button>
											<button class="btn send disabled" disabled><i
													class="material-icons">send</i></button>
										</form>
										<label>
											<input type="file" disabled>
											<span class="btn attach disabled d-sm-block d-none"><i
													class="material-icons">attach_file</i></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Chat -->
					</div>  --}}
					<!-- End of Babble -->
				</div>
			</div>
		</div> <!-- Layout -->
	</main>
	<div id="UserData">
		<input type="text" style="display:none;" id="id" value="{{$user->id}}">
		<input type="text" style="display:none;" id="name" value="{{$user->name}}">
		<input type="text" style="display:none;" id="email" value="{{$user->email}}">
		<input type="text" style="display:none;" id="avatar" value="{{$user->avatar}}">
	</div>
	<!-- Bootstrap/Swipe core JavaScript
		================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="dist/js/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script>
		window.jQuery || document.write('<script src="dist/js/vendor/jquery-slim.min.js"><\/script>')
	</script>
	<script src="{{asset('dist/js/vendor/popper.min.js')}}"></script>
	<script src="{{asset('dist/js/swipe.min.js')}}"></script>
	<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/opencv.js')}}"></script>
	<script>
		function scrollToBottom(el) {
			el.scrollTop = el.scrollHeight;
		}
		scrollToBottom(document.getElementById('content'));
	</script>
	{{--  /**
		* External Coding
		*/  --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io-stream/0.9.1/socket.io-stream.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>
	<script src="https://unpkg.com/peerjs@1.0.0/dist/peerjs.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-peer@9.3.0/simplepeer.min.js"></script>
	<script>
		var socket = io.connect("http://localhost:8888");

		var id = $('#id').val();
		var name = $('#name').val();
		var email = $('#email').val();
		var avatar = $('#avatar').val();
		var user = {
			'id': id,
			'name': name,
			'email': email,
			'avatar': avatar
		}

		console.log(user);
		// Connection Start
		socket.on('connect', () => {
			socket.emit('startConnection', id);		
		});
		// Connection Start
		
		socket.on('disconnect', (reason) => {
			if (reason === 'io server disconnect') {
				// the disconnection was initiated by the server, you need to reconnect manually
				socket.connect();
			}
			// else the socket will automatically try to reconnect
			socket.emit('endConnection', id);
		});

		jQuery(document).ready(function () {


			$('#on-typing').hide();

			$('#submit-chat').click(function (user) {
				console.log(" ia m clicked");
				var date = new Date();
				var hour = date.getHours() - (date.getHours() >= 12 ? 12 : 0);
				var period = date.getHours() >= 12 ? 'PM' : 'AM';

				var text = {
					'id': id,
					'name': name,
					'email': email,
					'avatar': avatar,
					'message': $('textarea#text-chat').val(),
					'time' : hour  + ':' + date.getMinutes() + ' ' +period,
					'id' : socket.id
				}
				if ($('textarea#text-chat').val() != "") {
					socket.emit('sendChatToServer', text);
					socket.emit('private-message-sender', text);
					$('textarea#text-chat').val('');
				} else {
					alert("please enter somthing in the body");
				}
				return false;
			});


			// not typing event
			socket.on('hide-typing', function (user) {
				setTimeout(function () {
					$('#on-typing').hide();
				}, 1500);
			});
			// not typing event end
			// typing event start
			$('textarea#text-chat').keyup(function () {
				if ($('textarea#text-chat').val() != "") {
					var date = new Date();
					var hour = date.getHours() - (date.getHours() >= 12 ? 12 : 0);
					var period = date.getHours() >= 12 ? 'PM' : 'AM';

//					alert( hour  + ':' + date.getMinutes() + ' ' +period);
					var text = {
						'id': id,
						'name': name,
						'email': email,
						'avatar': avatar,
						'message': $('textarea#text-chat').val(),
						'time' : hour  + ':' + date.getMinutes() + ' ' +period
					}
					socket.emit('ontype', text);
					socket.emit('typing-stop', text);
				}
			});
			// typing event end

			socket.on('serverChattoClient', function (msg) {
				console.log("msg - Client : " + JSON.stringify(msg));
				$('#content .col-md-12').append(
					'<div class="message"><img class="avatar-md" src="/userimage/' + msg.avatar +
					'" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith"><div class="text-main"><div class="text-group"><div class="text"><p  style="color : #212529;">' +
					msg.message +
					'</p></div></div><span>' + msg.time + '</span></div></div>'
				);
			});
			socket.on('serverChattoSender', function (msg) {
				console.log("msg - Client : " + JSON.stringify(msg));
				$('#content .col-md-12').append(
					'<div class="message me"><div class="text-main"><div class="text-group me"><div class="text me"   style="color : #212529;">' +
					msg.message +
					'</div></div><span>' + msg.time + '</span></div></div>'
				);
			});

			socket.on('private-message-client', function (message) {
				alert('i am getting message');
				console.log("this is umer private message");
			});

			socket.on('typing', function (message) {
				console.log("I am recieving your messages : " + message.message);
				$('#on-typing-avatar').attr('src', "/userimage/" + message.avatar);
				$('#on-typing').show();
			});

			socket.on('audio-stream', function (message) {
				console.log("I am recieving audio streams");
			});
			// Fragments 
			socket.on('recieverimage', function (image) {
				console.log("I am recieving Frames");
				$("#recieverimage").attr("src", `data:image/jpeg;base64,${image}`);
			});

			socket.on('senderimage', function (image) {
				console.log("I am recieving Frames");
				$("#senderimage").attr("src", `data:image/jpeg;base64,${image}`);
			});

			socket.on('recieve-file', function (message) {
				if (message.fileextension == "mp3") {
					$('#content .col-md-12').append(
						'<div class="message"><img class="avatar-md" src="/userimage/' + message.avatar + '" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith"><div class="text-main"><div class="text-group"><div class="text">' +
						'<audio controls="" id="player"><source src="http://computernetworks.test/' +
						message.client_filename + '" type="audio/ogg"><source src="http://computernetworks.test/' + message.client_filename + '" type="audio/mpeg">' +
						'Your browser does not support the audio element.</audio>' +
						'</div></div><span>' + message.time + '</span></div></div>'
					);
				}
				if (message.fileextension == "png" || message.fileextension == "jpg" || message
					.fileextension == "jpeg") {
						alert()
					$('#content .col-md-12').append(
						'<div class="message"><img class="avatar-md" src="/userimage/' + message.avatar + '" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith"><div class="text-main"><div class="text-group"><div class="text"><p>' +
						'<img src="' + message.client_filename +
						'" style="width:400px;height:400px;" /> ' +
						'</p></div></div><span>' + message.time + '</span></div></div>'
					);
				}
				if (message.fileextension == "pdf") {
					$('#content .col-md-12').append(
						'<div class="message"><img class="avatar-md" src="/userimage/' + message.avatar + '" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith"><div class="text-main">' +
						'<div class="text-group"><div class="text"><div class="attachment"><button class="btn attach"><i class="material-icons md-18">insert_drive_file</i></button><div class="file"><h5><a href="' +
						message.client_filename + '">' + message.client_filename +
						'</a></h5><span>24kb Document</span></div></div></div></div><span>' + message
						.time + '</span></div></div>'
					);
				}

			});

			socket.on('recieve-file-sender', function (message) {
				console.log("I am umer reciebng");

				var a =
					'<div class="message"><img class="avatar-md" src="/userimage/' + message.avatar + '" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith"><div class="text-main">' +
					'<div class="text-group"><div class="text"><div class="attachment"><button class="btn attach"><i class="material-icons md-18">insert_drive_file</i></button><div class="file"><h5><a href="#">' +
					message.client_filename +
					'</a></h5><span>24kb Document</span></div></div></div></div><span>' + message.time +
					'</span></div></div>';
				if (message.fileextension == "mp3") {
					$('#content .col-md-12').append(
						'<div class="message me"><div class="text-main"><div class="text-group me"><div class="text me">' +
						'<audio controls="" id="player"><source src="http://computernetworks.test/' +
						message.client_filename + '" type="audio/ogg"><source src="http://computernetworks.test/' + message.client_filename + '" type="audio/mpeg">' +
						'</div></div><span>' + message.time + '</span></div></div>'
					);
				}
				if (message.fileextension == "pdf") {
					$('#content .col-md-12').append(
						'<div class="message me"><div class="text-main"><div class="text-group me"><div class="text me">' +
						'<div class="attachment"><button class="btn attach"><i class="material-icons md-18">insert_drive_file</i></button><div class="file"><h5><a href="' +
						message.client_filename + '">' + message.client_filename +
						'</a></h5><span>24kb Document</span></div></div>' +
						'</div></div><span>' + message.time + '</span></div></div>'

					);
				}
				if (message.fileextension == "png" || message.fileextension == "jpg" || message
					.fileextension == "jpeg") {
					$('#content .col-md-12').append(
						'<div class="message me"><div class="text-main"><div class="text-group me"><div class="text me">' +
						'<img src="' + message.client_filename +
						'" style="width:400px;height:400px;" /> ' +
						'</div></div><span>' + message.time + '</span></div></div>'
					);
				}
			});

		});
		// File Atatchment working for socket.io
		$('#file-attachment-stream').change(function (e) {
			alert("I am umer");
			let file = e.target.files[0];
			let stream = ss.createStream();
			
			ss(socket).emit('file', stream, {
				size: file.size,
				fileextension: file.name.split('.').pop(),
				filename: file.name
			});
			let blobStream = ss.createBlobReadStream(file);
			let size = 0;
			console.log(file);
			blobStream.on('data', chunk => {
				size += chunk.length;
				console.log(Math.floor(size / file.size * 100) + '%');
			});
			blobStream.pipe(stream);
			blobStream.on('end', () => {
				console.log('done');
			});
		});

		$("#videosharing").click(function () {
			var data_video = $("#videosharing").attr('data_video');
			if (data_video == "false") {
				$("#videosharing").attr('data_video', 'true');
				socket.emit('startvideosharing', 'video sharing Start');
			} else if (data_video == "true") {
				$("#videosharing").attr('data_video', "false");
				socket.emit('stopvideosharing', 'video sharing Stop');
			}
			alert("Handler for .click() called." + data_video);

		});

	</script>
</body>

</html>