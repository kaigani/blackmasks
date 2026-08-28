#!/usr/local/bin/perl
#!/usr/local/bin/perl5.001



# Perl Routines to Manipulate CGI input

#

# Copyright 1993 Steven E. Brenner

# Unpublished work.

# Permission granted to use and modify this library so long as the

# copyright above is maintained, modifications are documented, and

# credit is given for any use of the library.



# ReadParse

# Reads in GET or POST data, converts it to unescaped text, and puts

# one key=value in each member of the list "@in"

# Also creates key/value pairs in %in, using '\0' to separate multiple

# selections



# If a variable-glob parameter (e.g., *cgi_input) is passed to ReadParse,

# information is stored there, rather than in $in, @in, and %in.



# modified by Harper Vinkemulder on 2/18/97 for IBM Developer's Domain Member Registration.




sub ReadParse {

  if (@_) {

    local (*in) = @_;

  }



  local ($i, $loc, $key, $val);



  # Read in text

  if ($ENV{'REQUEST_METHOD'} eq "GET") {

    $in = $ENV{'QUERY_STRING'};

  } elsif ($ENV{'REQUEST_METHOD'} eq "POST") {

    for ($i = 0; $i < $ENV{'CONTENT_LENGTH'}; $i++) {

      $in .= getc;

    }

  }



  @in = split(/&/,$in);



  foreach $i (0 .. $#in) {

    # Convert plus's to spaces

    $in[$i] =~ s/\+/ /g;



    # Convert %XX from hex numbers to alphanumeric

    $in[$i] =~ s/%(..)/pack("c",hex($1))/ge;



    # Split into key and value.

    $loc = index($in[$i],"=");

    $key = substr($in[$i],0,$loc);

    $val = substr($in[$i],$loc+1);

    $in{$key} .= '\0' if (defined($in{$key})); # \0 is the multiple separator

    $in{$key} .= $val;

  }



  return 1; # just for fun

}



# PrintHeader

# Returns the magic line which tells WWW that we're an HTML document



sub PrintHeader {

  return "Content-type: text/html\n\n";

}



# This stuff was written by  Paul Chamberlain, IBM

# This is a crude E-mail gateway.



&ReadParse;



$server = $ENV{"SERVER_NAME"};

$host = $ENV{"REMOTE_HOST"};


$to = $in{'email'};


$name = $in{'name'};
$email = $in{'email'};
$address = $in{'address'};
$city = $in{'city'};
$state = $in{'state'};
$country = $in{'country'};
$postcode = $in{'postcode'};
$subject = $in{'subject'};
$message = $in{'message'};



$to =~ s/[|!~'"`]//g;

$subject =~ s/[|!~'"`]//g;



# Really should make sure $to doesn't have any quotes

open(MAIL,"|/usr/sbin/sendmail -t") || die;

print  MAIL "To: blackmasksmagazine\@yahoo.com\n";

print MAIL "From: $email\n" ;

print MAIL "Subject: $subject\n";

print MAIL "Remote host: $host\n\n\n";



print MAIL "SUBSCRIPTION INFORMATION\n\n";

print MAIL "NAME:	$name\n";
print MAIL "EMAIL:	$email\n";
print MAIL "ADDRESS: $address\n";
print MAIL "CITY,STATE,POSTCODE: $city, $state, $postcode\n";
print MAIL "COUNTRY: $country\n\n";
print MAIL "MESSAGE\n";
print MAIL "-------------------------------------\n";
print MAIL "$message\n\n";
print MAIL "\n--------\n";



$rc = close(MAIL);





if ($rc == 0 || $rc == 1) {

print "Location: https://www.paypal.com/subscriptions/business=blackmasksmagazine%40yahoo.com&item_name=Black+Masks+-+6+Issues&no_shipping=1&no_note=1&a3=20.00&p3=12&t3=M&sra=1\r\n\r\n";



} else {

	&PrintHeader();
	print "<html><head><title>Error: Sending Mail</title></head>\n";
	print "<body bgcolor = 'ffffff'>\n";
	print "<center><b>The mail command returned $rc when mailing to the IBM Application Development and Object Technology Web Team.\n";

	print "<p>This probably means it failed.</b></center>\n";
	print "</body></html>\n";
}





exit 0; #return true





