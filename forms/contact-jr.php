<perch:form id="contact" method="post" app="perch_forms">
    <div class="form">

        <div class="form_name">
            <perch:label for="name">Name is required</perch:label> 
            <perch:input id="name" type="text" label="Name" required="true"/>
                <perch:error for="name" type="required">Please add your name.</perch:error>
   
        </div>

        <div class="form_email">
            <perch:label for="email">Email is required</perch:label>
                <perch:input type="email" id="email" label="Email" />
                    <perch:error for="email" >Please add your email address</perch:error>
                        <perch:error for="email" type="format">Please check your email address</perch:error>
        </div>

        <div class="art_clear">
        </div>

        <div>
            <perch:label for="phone">Phone: not required</perch:label>
                <perch:input type="text" id="phone" label="Phone" />
        </div>

                <div class="input-hp">
            <perch:input type="text" id="input_hp" antispam="honeypot" />
                <perch:label for="input_hp">Screenreaders please skip to the next input</perch:label>
        </div>

        <div id="message">
            <perch:label for="message">Message: required </perch:label>
                <perch:input type="textarea" id="message" Message is required="true" label="Message" placeholder="Your message here" textile="true" editor="markitup" />
                    <perch:error for="message" type="required">Please add a message</perch:error>
        </div>

        <!--<div class="larger_label flt_rt">
            <perch:label for="sendfile">Send us a file</perch:label>
                <perch:input type="file" id="sendfile" accept="pdf office text" />
                    <perch:error for="sendfile" type="filetype"><span class="error">File type is not accepted.</span>
                        </perch:error>
        </div>
    -->
        <div class="larger_label">
            <perch:label for="sendimg">Send us an image</perch:label>
                <perch:input type="image" id="sendimg" accept="jpg png svg pdf doc docx xls xlsx" />
                    <perch:error for="sendimg" type="imgtype"><span class="error">File type is not accepted.</span>
                    </perch:error>
        </div>

        <div class="larger_label">
            <perch:label for="sendimg2">Send us a second image</perch:label>
                <perch:input type="image" id="sendimg2" accept="jpg png svg pdf doc docx xls xlsx" />
                    <perch:error for="sendimg2" type="imgtype"><span class="error">File type is not accepted.</span>
                    </perch:error>
        </div>

        <div>
            <perch:input type="submit" id="submit" value="Submit" output="path"/>
        </div>
            <perch:success>
                <div class="alert success">
                    <p><perch:content id="submit_message" type="text" size="m" label="Form successfully submitted message" divider-before="This will acknowledge a form being successfully submitted." /></p>
                        <perch:content id="success" type="textarea" label="Additional message upon a form being submitted successfully" markdown="true" editor="markitup" divider-before="The following will be appear in addition to the success message when a form is submitted." />
                </div>
            </perch:success>
    </div>
 </perch:form>	
