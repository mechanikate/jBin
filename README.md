<h1 align="center">jBin</h1>
A simple, PHP-only <i>hastebin</i> clone.

<h2>Usage</h2>
<h3>User</h3>
Just type what you want to write down in the box!
Saving is as simple as pressing the <u>save</u> button. This will instantly redirect you to a read-only version of your document that you can view at any time using the updated URL displayed on screen and in your address bar.

If you want the <i>raw</i> format of your text file, do any of the following:
<ol>
    <li>Copy the (by default) random 10 character-long filename and replace the (by default) <code>storage/</code> with <code>r/</code> for <u>r</u>etrieving your text.</li>
    <li>Click <u>save raw</u> when you save it in the first place, and that will bring you to the raw file.</li>
    <li>Click <u>raw</u> at the bottom of the HTML version's page.</li>
</ol>
This will give you a raw format for CLI tools like <code>wget</code> and <code>curl</code>.
<h3>Hoster</h3>
Hosting jBin is as simple as any PHP project can get. For most hosting providers, you can just copy the files into a directory and change the values in <code>settings.php</code> to fit your location.
Each variable is defined as follows:
<ul>
    <li>
        <b>basePath</b>: the path to your website's jBin root, e.g. <code>//localhost/jbin/</code> or something like <code>https://matthy.dev/jbin/</code>.
    </li>
        <b>baseDirPath</b>: the root directory on your <u>server</u>  wherein jBin is located.
    </li>
    <li>
        <b>storageUrlPath</b>: the subdirectory below basePath and storageUrlPath where the actual saved text files are stored.
    </li>
    <li>
        <b>urlLength</b>: the amount of random characters to generate for the URL when you save a file.
    </li>
</ul>
These are described in more depth in <code>settings.php</code>.
