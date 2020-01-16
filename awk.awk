/^commit/ {
	commit = $2
}

/^Author:/ {
	split($0,cols, ": +")
	author = cols[2]
}

/^Date:/ {
	date = $3" "$4" "$5" "$6
}

/^.\t/ {
	split ($0,cols,"\t")
	print "\"" repository "\"\t" commit "\t\"" author "\"\t\"" date "\"\t" $1 "\t\"" cols[2] "\""
}
