#! /bin/sh

java -cp "fop.jar:xml-apis.jar:xercesImpl-2.2.1.jar:xalan-2.4.1.jar:batik.jar:avalon-framework-cvs-20020806.jar" -Xmx256m org.apache.fop.apps.Fop -c "conf/luserconfig.xml" -xml "../xml/23013455435512F0500105100000000120620152301.xml" -xsl "../blank/F0500105.fo" -pdf "../pdf/23013455435512F0500105100000000120620152301.pdf"

