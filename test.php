<?php

$page_title = "test page";
$page_published = "2024-05-07";

$page_content = <<<ILHTML
	<h1>Markdown Features Showcase</h1>

<h2>Headings</h2>
<h3>Subheadings</h3>

<h2>Emphasis</h2>
<p><em>Italic text</em></p>
<p><strong>Bold text</strong></p>
<p><strong><em>Bold and Italic text</em></strong></p>

<h2>Lists</h2>

<h3>Unordered List</h3>
<ul>
  <li>Item 1</li>
  <li>Item 2
    <ul>
      <li>Sub-item 2.1</li>
      <li>Sub-item 2.2</li>
    </ul>
  </li>
  <li>Item 3</li>
</ul>

<h3>Ordered List</h3>
<ol>
  <li>First item</li>
  <li>Second item</li>
  <li>Third item</li>
</ol>

<h2>Blockquotes</h2>
<blockquote>
  <p>This is a blockquote.</p>
</blockquote>

<h2>Horizontal Rule</h2>
<hr>

<h2>Links</h2>
<p><a href="https://www.markdownguide.org/">Markdown Guide</a></p>

<h2>Code Blocks</h2>
<pre><code>print("Hello, world!")
</code></pre>

<h2>Inline Code</h2>
<p>Use backticks to highlight <code>inline code</code>.</p>

<h2>Tables</h2>
<table>
  <thead>
    <tr>
      <th>Column 1</th>
      <th>Column 2</th>
      <th>Column 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Item 1</td>
      <td>Item 2</td>
      <td>Item 3</td>
    </tr>
    <tr>
      <td>Item 4</td>
      <td>Item 5</td>
      <td>Item 6</td>
    </tr>
  </tbody>
</table>

<h2>Task Lists</h2>
<ul>
  <li>[x] Task 1</li>
  <li>[ ] Task 2</li>
  <li>[ ] Task 3</li>
</ul>

<h2>Strikethrough</h2>
<p><del>Strikethrough text</del></p>

<h2>Escaping Characters</h2>
<p>*This text won't be italicized*</p>

<h2>Emojis</h2>
<p>:smiley: :thumbsup: :rocket:</p>

<h2>Footnotes</h2>
<p>Here is some text with a footnote<sup><a href="#fn1" id="ref1">[1]</a></sup>.</p>
<div class="footnotes">
  <ol>
    <li id="fn1">
      <p>This is the footnote text. <a href="#ref1" title="Jump back to footnote 1 in the text">&#8617;</a></p>
    </li>
  </ol>
</div>

<h2>Automatic Links</h2>
<p><a href="https://www.example.com">https://www.example.com</a></p>

<h2>HTML Elements</h2>
<p><span style="color: red;">This text is red.</span></p>

<h2>Inline HTML</h2>
<p><u>This text is underlined.</u></p>

<h2>Superscript and Subscript</h2>
<p>Superscript: X<sup>2</sup></p>
<p>Subscript: H<sub>2</sub>O</p>

<h2>Abbreviations</h2>
<p>HTML stands for Hypertext Markup Language.</p>

<h2>Definition Lists</h2>
<dl>
  <dt>HTML</dt>
  <dd>Hypertext Markup Language</dd>
  <dt>CSS</dt>
  <dd>Cascading Style Sheets</dd>
</dl>

<h2>Emoji Shortcodes</h2>
<p>:fire: :heart: :rocket:</p>

<h2>Strikethrough</h2>
<p><del>Strikethrough text</del></p>

<p>That's a comprehensive showcase of various Markdown features!</p>
ILHTML;

include "template.php";
