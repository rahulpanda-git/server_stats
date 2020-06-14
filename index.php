<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<h1>Welcome to my AWS Webserver</h1>

<table>
  <tr>
    <td><strong>Name of Developer</strong></td>
    <td>Rahul Panda</td>
  </tr>
    <tr>
    <td><strong>LinkedIn Profile</strong></td>
    <td>https://www.linkedin.com/in/rahulpanda/</td>
  </tr>
  <tr>
    <td><strong>Infrastructure Used</strong></td>
    <td>AWS EC2 (t2.micro) and EBS Volume (1GiB gp2)</td>
  </tr>
   <tr>
    <td><strong>Technology Stack</strong></td>
    <td>AWS Cloud and Terraform</td>
  </tr>
  <tr>
    <td><strong>Training undertaken by</strong></td>
    <td>LinuxWorld Informatics Pvt Ltd</td>
  </tr>
</table>

<h4>Server Memory Details;</h4>
<pre>
<?php
print `free -h`
?>
</pre>

<h4>Server CPU Details;</h4>
<pre>
<?php
print `lscpu | grep -e 'Architecture\|CPU(s):\|Model name\|CPU MHz'`
?>
</pre>

<h4>Server IP Details;</h4>
<pre>
<?php
print `ifconfig`;
?>
</pre>