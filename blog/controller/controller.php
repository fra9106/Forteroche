<?php 

require('model.php');

function listPost()
{
	$posts = getPosts();

	require('listPostsView.php');
}

function post()
{ 
	$post = getPost($_GET['id']);
	$comments = getComments($_GET['id']);

	require('postView.php');
}