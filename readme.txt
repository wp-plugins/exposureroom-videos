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
 
We hope you find this plug-in useful.

== Installation ==

1. Upload “exposurevideo.php” to the “/wp-content/plugins/” directory
1. Activate the plugin through the “Plugins” menu in WordPress
1. Place the [xr_video] tag in your templates

== Frequently Asked Questions ==
The following describes the attributes you need to provide in the [xr_video] tag and how to determine their values.

Id (Required):
The id attribute is a required attribute. The value of id attribute is the id of the asset (video) on ExposureRoom. If you’re not sure what the id of your video is then while on the Asset Display page (the page you view a video on), take a look at the address bar of your browser. For example:
[Click Here to see an example url in your browser](
http://exposureroom.com/members/skumar.aspx/assets/4c0151e5f72941f682d49eca99ed7e4a/ “Visit an Asset Display Page on ExposureRoom”)

The last portion of the url is the id of the asset. Do not include the forward slashes but rather just the stuff between the last two forward slashes.

Size (Required):
The size attribute can have the following values:
sm – Small
md – Medium
lr – HD Version

titleColor (Optional):
The titleColor attribute is optional and expects colors in hexadecimal notation. Simple color names are supported as well. For example:
<p>
<code>#ffffff – White</code><br />
<code>#000000 – Black</code>
</p>
Please visit [this discussion forum](
http://exposureroom.com/newsgroups/view.aspx?t=303)
