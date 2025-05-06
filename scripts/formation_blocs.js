document.addEventListener('DOMContentLoaded', function() {
    const bloc = document.getElementById("experience_section");

    bloc.innerHTML = ''
    bloc.innerHTML = `
                <div class="flex-container">
            <div class="flex-slide about">
                <div class="flex-title" ><span class="sub_title">Signal processing</span></div>

                <div class="flex-about">

                    <div class="bloc_description">
                        <p>JavaScript References. W3Schools maintains a complete JavaScript reference, including all HTML and browser objects. The reference contains examples for all ...</p>
                        <a href=""><i>Project</i></a>
                    </div>
                    <div class="bloc_notions">
                        <ul>
                            <li>Alternative current</li>
                            <li>Fournier</li>
                            <li>Python(Jupyter Notebook, Anaconda)</li>
                            <li>Signal processing and modulation</li>
                        </ul>
                    </div>

                </div>
                
            </div>
            <div class="flex-slide about">
                <div class="flex-title">CSS</div>
                <div class="flex-about"><p>CSS Tutorial ... CSS is the language we use to style an HTML document. CSS describes how HTML elements should be displayed. This tutorial will teach you CSS from ...            </p></div>
            </div>
            <div class="flex-slide work">
                <div class="flex-title">Node JS</div>
                <div class="flex-about"><p>Node.js is a cross-platform, open-source JavaScript runtime environment that can run on Windows, Linux, Unix, macOS, and more. Node.js runs on the V8 JavaScript engine, and executes JavaScript code outside a web browser. Node.js lets developers use JavaScript to write command line tools and for server-side scripting</p>
                </div>
            </div>
            <div class="flex-slide contact">
                <div class="flex-title">Socket i/o</div>
                <div class="flex-about"><p>Socket.IO is an event-driven library for real-time web applications. It enables real-time, bi-directional communication between web clients and servers. It consists of two components: a client, and a server. Both components have a nearly identical API.</p>
                </div>
            </div>
        </div>`;
});