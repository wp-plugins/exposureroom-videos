=== Plugin Name ===
Contributors: matlus
Donate link: http://exposureroom.com/
Tags: video, embed, exposureroom, shortcode
Requires at least: 2.0.2
Tested up to: 2.8.2
Stable tag: 1.0

Embed ExposureRoom Videos in your WordPress Blog

== Description ==
One of the nice things about this plug-in is that it is dynamic. This has two advantages over the static links we provide for normal embeds.
 
1. If you change the dimensions of your video (say you cropped it later) this plug-in will react immediately to the new dimensions without you having to do anything.
 
2. If we change things about our player such as a new design that requires new overall dimensions or if we allow fullscreen viewing (as we've recently done) for embedded videos, this plug-in will react immediately so you don't have to change your embed code.

3. When visitors to your website browse your site using an <b>iPhone</b>, this plug-in will automatically switch over to display the iPhone version of the video.
 
you can watch a video those show you how to use the plug-in and the various customization options available.
<a href="http://exposureroom.com/members/skumar.aspx/assets/77178637ca8242a3b764c9da033055fe/"><img src="http://exposureroom.com/getassetthumbnailimage.aspx?id=77178637ca8242a3b764c9da033055fe&size=sm" alt="ExposureRoom WordPress Plug-in Tutorial"/></a>

== Installation ==

1. Upload “exposurevideo.php” to the “/wp-content/plugins/” directory
1. Activate the plugin through the “Plugins” menu in WordPress
1. Place the [xr_video] tag in your templates

== Frequently Asked Questions ==
The following describes the attributes you need to provide in the [xr_video] tag and how to determine their values.

<h4>id (Required):</h4>
The id attribute is a required attribute. The value of id attribute is the id of the asset (video) on ExposureRoom. If you’re not sure what the id of your video is then while on the Asset Display page (the page you view a video on), take a look at the address bar of your browser. For example:
[Click Here to see an example url in your browser](
http://exposureroom.com/members/skumar.aspx/assets/4c0151e5f72941f682d49eca99ed7e4a/ “Visit an Asset Display Page on ExposureRoom”)

The last portion of the url is the id of the asset. Do not include the forward slashes but rather just the stuff between the last two forward slashes.

<h4>size (Required):</h4>
The size attribute can have the following values:

sm – Small<br/>
md – Medium<br/>
lr – HD Version


<h4>width (Optional)</h4>
This attribute allows you to control the width of your embedded video. By default the width is determined by the size attribute. However, you can re-size the video using this attribute. The height is calculated automatically so as to maintain the correct aspect ratio of your video. A positive integer is expected as the value of this attribute.

<h4>viewOnXR (Optional)</h4>
This attribute controls the link "View on ExposureRoom" that appears below the video. This link will link back to the Asset Display Page of this video on ExposureRoom.
This attribute can have the following values:

true - Show the link<br/>
false - Don't show the link<br/>

The default value of this attribute is "true".

<h4>title (Optional)</h4>
This attribute controls turning on/off the title of the video. The title appears <b>below the player</b> and <b>outside</b> the player.
This attribute can have the following values:

true - Show the title<br/>
false - Don't show the title<br/>

The default value of this attribute is "false".

<h4>description (Optional)</h4>
This attribute controls the turning on/off of the description of the video. The description appears <b>below the player</b> and <b>outside</b> the player as well as <b>below</b> the title if it has been turned on.
This attribute can have the following values:

true - Show the description<br/>
false - Don't show the description<br/>

The default value of this attribute is "false".


<h4>titleColor (Optional):</h4>
This attribute controls the color of the title of the video <b>inside</b> the player. Due to the poster frame of the video, it is possible that the title and creator are not visible clearly. So this attribute allows you to change the color of the title to a contrasting color.
The titleColor attribute expects colors in hexadecimal notation. Simple color names are supported as well. For example:
<p>
<code>#ffffff – White</code><br />
<code>#000000 – Black</code>
</p>

Please visit [this discussion forum](
http://exposureroom.com/newsgroups/view.aspx?t=303)