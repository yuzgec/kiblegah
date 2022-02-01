
    <div class="col-12 col-md-9">
        <div class="row">
            <div class="col-sm-3 mt-2">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body p-2 text-center ">
                        <div class="demo-icon-preview">
                            <div data-icon-preview-icon="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg>
                            </div>
                        </div>
                        <div class="text-h3 m-0 font-weight-bold">[{{ $Pages->count() }}] Sayfa</div>
                        <div class="text-muted mb-3">
                            <a href="{{route('page.index')}}" title="Sayfa Yönetimi" class="btn btn-outline-tabler btn-sm ">
                                Sayfa Yönetimi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-2">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body p-2 text-center ">
                        <div class="demo-icon-preview">
                            <div data-icon-preview-icon="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="7" width="18" height="13" rx="2" /><path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" /><line x1="12" y1="12" x2="12" y2="12.01" /><path d="M3 13a20 20 0 0 0 18 0" /></svg>
                            </div>
                        </div>
                        <div class="text-h3 m-0 font-weight-bold">[{{ $Service->count() }}] Hizmet</div>
                        <div class="text-muted mb-3">
                            <a href="{{route('service.index')}}" title="Hizmet Yönetimi" class="btn btn-outline-tabler btn-sm ">
                                Hizmet Yönetimi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-2">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body p-2 text-center ">
                        <div class="demo-icon-preview">
                            <div data-icon-preview-icon="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="9" y1="9" x2="10" y2="9" /><line x1="9" y1="13" x2="15" y2="13" /><line x1="9" y1="17" x2="15" y2="17" /></svg>
                            </div>
                        </div>
                        <div class="text-h3 m-0 font-weight-bold">[{{ $Blog->count() }}] Blog</div>
                        <div class="text-muted mb-3">
                            <a href="{{route('blog.index')}}" title="Blog Yönetimi" class="btn btn-outline-tabler btn-sm ">
                                Blog Yönetimi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-2">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body p-2 text-center ">
                        <div class="demo-icon-preview">
                            <div data-icon-preview-icon="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3" /></svg>
                            </div>
                        </div>
                        <div class="text-h3 m-0 font-weight-bold">[{{ $Project}}] Proje</div>
                        <div class="text-muted mb-3">
                            <a href="{{route('project.index')}}" title="Proje Yönetimi" class="btn btn-outline-tabler btn-sm ">
                                Proje Yönetimi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-2">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body p-2 text-center ">
                        <div class="demo-icon-preview">
                            <div data-icon-preview-icon="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                            </div>
                        </div>
                        <div class="text-h3 m-0 font-weight-bold">[{{ $Team }}] Ekip</div>
                        <div class="text-muted mb-3">
                            <a href="{{route('team.index')}}" title="Ekip Yönetimi" class="btn btn-outline-tabler btn-sm ">
                                Ekip Yönetimi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-2">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body p-2 text-center ">
                        <div class="demo-icon-preview">
                            <div data-icon-preview-icon="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
                            </div>
                        </div>
                        <div class="text-h3 m-0 font-weight-bold">[{{ $Video }} ]Video</div>
                        <div class="text-muted mb-3">
                            <a href="{{route('video.index')}}" title="Video Yönetimi" class="btn btn-outline-tabler btn-sm ">
                                Video Yönetimi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-2">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body p-2 text-center ">
                        <div class="demo-icon-preview">
                            <div data-icon-preview-icon="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" /><circle cx="12" cy="13" r="3" /></svg>
                            </div>
                        </div>
                    <div class="text-h3 m-0 font-weight-bold">[{{ $Faq }}] Galeri</div>
                    <div class="text-muted mb-3">
                        <a href="{{route('gallery.index')}}" title="Galeri Yönetimi" class="btn btn-outline-tabler btn-sm ">
                            Galeri Yönetimi
                        </a>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-sm-3 mt-2">
            <div class="card">
                <div class="card-status-bottom bg-primary"></div>
                <div class="card-body p-2 text-center ">
                    <div class="demo-icon-preview">
                        <div data-icon-preview-icon="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><line x1="12" y1="19" x2="12" y2="19.01" /></svg>
                        </div>
                    </div>
                <div class="text-h3 m-0 font-weight-bold">[{{ $Faq }}] S.S.S</div>
                <div class="text-muted mb-3">
                    <a href="{{route('faq.index')}}" title="S.S.S Yönetimi" class="btn btn-outline-tabler btn-sm ">
                        S.S.S Yönetimi
                    </a>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

    <div class="col-12 col-md-3">
        <div class="card mt-2" style="height: calc(24rem + 10px)">

            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                <h4 class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" /><path d="M3 6l9 6l9 -6" /><path d="M15 18h6" /><path d="M18 15l3 3l-3 3" /></svg>
                    İletişim Formu [{{$Activity->count()}}]
                    <br>
                    <small style="font-size: 10px" class="badge bg-azure text-capitalize">Okunmamış Mesajlarınız Var</small>
                </h4>
                <div class="divide-y">
                    @foreach($Activity as $item)
                    <div>
                        <div class="row">
                            <div class="col">
                                <div class="text-truncate">
                                    <strong>Jeffie Lewzey</strong> commented on your post.
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="text-muted">12 Saat Önce</div>
                                    <div class="text-muted badge text-black">İletişim</div>
                                </div>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="badge bg-success"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
