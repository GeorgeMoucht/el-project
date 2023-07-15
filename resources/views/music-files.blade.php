@extends('layouts.app')
<link href="{{ asset('css/music-files.css') }}" rel="stylesheet">
@section('content')

<div class="global-wrapper">    
    <div class="container">
        <div class="row align-items-start pt-5 mb-4" style="display: flex; justify-content: center;">
            <div class="col-sm-12 col-md-2 ms-3 me-3 rounded-box category-tree-cnt">
                <h5>Κατηγορίες</h5>
                <ul class="tree">   
                    <li>
                        <details>
                            <summary><span class="mini-folder"><img src="{{ asset('img/small-folder.png') }}" alt=""></span> First Item</summary>
                            <ul>
                                <li>
                                    <details>
                                        <summary><span class="mini-folder"><img src="{{ asset('img/small-folder.png') }}" alt=""></span>First Item</summary>
                                        <ul>
                                            <li class="li-hover">First</li>
                                            <li class="li-hover">Second</li>
                                            <li class="li-hover">Third</li>
                                        </ul>

                                    </details>
                                </li>
                                <li class="li-hover">Second</li>
                                <li class="li-hover">Third</li>
                            </ul>   
                        </details>
                                             
                    </li>
                    <li>
                        <details>
                            <summary><span class="mini-folder"><img src="{{ asset('img/small-folder.png') }}" alt=""></span>Second</summary>
                            <ul>
                                <li>
                                    <details>
                                        <summary><span class="mini-folder"><img src="{{ asset('img/small-folder.png') }}" alt=""></span>First Item</summary>
                                        <ul>
                                            <li class="li-hover">First</li>
                                            <li class="li-hover">Second</li>
                                            <li class="li-hover">Third</li>
                                        </ul>
                                    </details>
                                    
                                </li>
                                <li class="li-hover">Second</li>
                                <li class="li-hover">Third</li>
                            </ul> 
                        </details>   
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-2 ms-3 me-3 rounded-box folders-cnt">
                <h1>Group_1</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    
                </ul>
            </div>
            <div class="col-sm-12 col-md-2 ms-3 me-3 rounded-box folders-cnt">
                <h1>Group_2</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    
                </ul>
            </div>
            <div class="col-sm-12 col-md-2  ms-3 me-3 rounded-box folders-cnt">
                <h1>Group_3</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="row" style="display: flex; justify-content: center;">
            <div class="col-sm-12 col-md-9 rounded-box most-downloaded-files-cnt mb-4">
                <h3>Most downloaded files</h3>
                <ul class="most-download-files">
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('pagespecificscripts')
<!-- <script src="{{ asset('js/gallery-script.js') }}"></script> -->
@endsection