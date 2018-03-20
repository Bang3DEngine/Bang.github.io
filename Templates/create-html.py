#!/usr/bin/python

import glob, os

HtmpExtension    = "htmp"
HtmlExtension    = "html"
IncludeDirective = "#include"

os.chdir(".")
for htmpFile in glob.glob("*." + HtmpExtension):

    htmpFileOpen  = open(htmpFile) 
    htmpFileLines = htmpFileOpen.readlines()
    htmpFileOpen.close()

    htmlFileLines = htmpFileLines
    for i, line in enumerate(htmlFileLines, start=0):
        incDirectiveIdx = line.find(IncludeDirective)
        if (incDirectiveIdx >= 0):
            incFile = line.strip(" \n").split(" ")[1]
            incFileContents = open(incFile).read()

            del htmlFileLines[i]

            j = i
            for incFileLine in incFileContents.split("\n"):
                htmlFileLines.insert(j, incFileLine + "\n")
                j = j + 1

    htmlFile = htmpFile.split(".")[0] + "." + HtmlExtension
    htmlFile = "../" + htmlFile
    htmlFileOpen = open(htmlFile, "w")
    htmlFileContents = ("").join(htmlFileLines)
    htmlFileOpen.write(htmlFileContents)
    htmlFileOpen.close()
