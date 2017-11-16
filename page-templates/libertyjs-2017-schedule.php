<?php
/*
Template Name: Schedule
*/
get_header();
?>

<h1 class="ljs2017-template-info__heading">
	<?php echo esc_html( get_the_title() ); ?>
</h1>

<div class="ljs2017-template-schedule__container" id="ljs2017-template-schedule__day1">
	<div class="ljs2017-template-schedule__container-day">
		<div class="ljs2017-template-schedule__date">
			<p>NOV 16TH</p>
			<p><span class="ljs2017-template-schedule__date-active">DAY 1</span> / <a href="#ljs2017-template-schedule__day2">DAY 2</a></p>
		</div>
		<div class="ljs2017-template-schedule__speakers">
			<div class="ljs2017-template-schedule__divider">
				<div>Registration 08:30 am</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-three">
				<div class="ljs2017-template-schedule__speaker-body">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">08:30 - 09:20</span>
						<span class="ljs2017-template-schedule__name">Breakfast and Registration</span>
						<span class="ljs2017-template-schedule__title"></span>
					</div>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-three">
				<div class="ljs2017-template-schedule__speaker-body">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">09:20 - 09:30</span>
						<span class="ljs2017-template-schedule__name">Opening Remarks</span>
						<span class="ljs2017-template-schedule__title"></span>
					</div>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-three">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/09/ernie-turner-e1506383735651.jpg"
						alt="Ernie Turner">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">09:30 - 10:10</span>
						<span class="ljs2017-template-schedule__name">Ernie Turner</span>
						<span class="ljs2017-template-schedule__title">Dodging Web Crypto API Landmines</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>"This talk will teach attendees how to use the Web Crypto API within a production application. The talk will focus on the practical implementation of cryptography and not on cryptography generalities. I won't be covering the breadth of the Web Crypto API, as it contains much more functionality than most developers need.</p>
					<p>I'll start out with a very brief intro to some basic cryptography concepts (random number generators, symmetric keys, IVs/nonces), but only enough to be able to use the terminology throughout the talk. I don't expect any of the attendees to have much/any prior knowledge of cryptography, but they also won't come out of the talk as cryptography experts either.</p>
					<p>In my example, I'll show how to take a single piece of data and encrypt it using AES with a key derived from a user provided password. As all of the Web Crypto API operations use Promises, I'll show how to chain them together to make a nice encryption and decryption workflow. In addition, because of the slower performance of these operations, I'll show how to use WebWorkers to do the cryptography processing in a separate thread and how to pass data between these threads quickly and securely.</p>
					<p>During each of these sections, I'll also cover browser support for each operation and what is/isn't available in major browsers. In situations where support is not fully available, I'll show which 3rd party libraries can be used as polyfills.</p>
					<p>In the end, I hope to show attendees that cryptography isn't as scary a concept as they might think. As long as they follow a few rules when encrypting data, it can be a very useful tool to understand."</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-one">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/11/brian-and-austin-e1510422905145.jpg"
						alt="Brian Gantick and Austin Starin">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">10:25 - 12:00</span>
						<span class="ljs2017-template-schedule__name">Brian Gantick + Austin Starin</span>
						<span class="ljs2017-template-schedule__title">A Vue (app) from the top - Introduction to Vue.js Workshop</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>"Since its initial release in February of 2014, Vue.js has rapidly become one of the top open-source progressive JavaScript frameworks. Approaching 63k stars on GitHub, Vue is one of the most popular open source projects ever and the second most popular JavaScript library after React, surpassing popular libraries and frameworks such as Angular, Backbone, Polymer, Ember, and even jQuery.</p>
					<p>Vue's popularity is due in large part to the ability to incrementally adopt the framework into existing projects and approachability for developers new to working with front-end frameworks. Since it is mostly an interface layer, Vue tends to be less opinionated than other frameworks, which makes it easier to learn and suitable as a drop-in library that can be used in existing projects to add interactivity or provide a declarative, HTML based template syntax. Beyond the drop-in use case, Vue can also be scaled up to be used as a full-blown application framework.</p>
					<p>In this workshop, we'll go over the basics of getting started with Vue, from getting your development environment setup using Vue CLI to deploying a completed application and debugging it using Vue dev tools. We'll run through how Vue can quickly and simply solve common front-end problem sets including how to create reactive and easily maintained UI through reusable components, as well as how to use more advanced features like mixins, filters, and custom directives. You'll also learn the basics of setting up Vue Router and how Vuex can help you manage state in larger applications, all while building a custom image gallery application."</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-two">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/10/sam-jones-e1507126360281.png"
						alt="Sam Jones">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">10:25 - 11:05</span>
						<span class="ljs2017-template-schedule__name">Sam Jones</span>
						<span class="ljs2017-template-schedule__title">JavaScript Is Too Convenient</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>Conveniences we love in JavaScript are discouraging us from writing concise, descriptive code. In-line objects and anonymous functions deprive us of descriptive domain names for the actions we are performing and the objects we use to perform them. They add noise that distracts from the purpose of a function.</p>
					<p>This is especially true in tests, which should help us feel the code we write. These conveniences encourage us to create functions that do too much and require complex test setup.</p>
					<p>"JavaScript is Too Convenient" will encourage you to write more focused code with good names. We can make our code nicer for new team members, and our future selves by examining the purpose of our code, amplifying the signal, and reducing the noise."</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-two">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/11/connor-skiro-e1510843978336.png"
						alt="Connor Skiro">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">11:20 - 12:00</span>
						<span class="ljs2017-template-schedule__name">Connor Skiro</span>
						<span class="ljs2017-template-schedule__title">Lean Coffee Session</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__divider">
				<div>Lunch</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-one">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/10/matt-morgis-e1508722870623.jpeg"
						alt="Matt Morgis">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">01:30 - 03:05</span>
						<span class="ljs2017-template-schedule__name">Matt Morgis + Tamera Lanham</span>
						<span class="ljs2017-template-schedule__title">Pair Programming with TDD and Jest Workshop</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>Customers value two things about software: how well it works, and the ease with which it can be changed. If you compromise either of those two values, the software will diminish in real value to the customer.</p>
					<p>If you have been a programmer for more than two or three years, you have probably been significantly slowed down by -someone else's- messy code. Have you ever waded through a mess so grave that it took weeks to do what should have taken hours? Have you seen what should have been a one-line change, made instead in hundreds of different modules?</p>
					<p>We've all been there.</p>
					<p>The degree of slowdown from messy code can be significant. Over the span of a year or two, teams that were moving very fast at the beginning of a project can find themselves moving at a snail's pace. Every change they make to the code breaks two or three other parts of the code. No change is trivial. **Every addition or modification to the system requires that the tangles, twists, and knots be understood so that more tangles, twists, and knots can be understood.</p>
					<p>So why does this happen to code? Why does good code rot so quickly into bad code? We always have lots of explanations for it, but perhaps the best: **The software should be easy to change,** but it often isn't.</p>
					<p>We complain the requirements changed in ways that thwart the original design. The truth is the business should not find it expensive add a new or change requirements. The business shouldn't be slowed down by wanting to change or adapt the system.</p>
					<p>What has worked at our small agency and at large international enterprise companies is practicing pair programming and TDD. Implementing these have lead to flexible software, shared team values and attitude towards the codebase, and most importantly happy customers. TDD is often thought of as an _individual_ practice. Yet, more software is built by teams. Teams that don't enjoy a shared set of values become unstable over time. Pair programming is a dialog between two people that can help break down these barriers and help teams conform on a shared set of values. </p>
					<p>When you first learn TDD, it sounds simple and easy. However, if you're like us, you may have had a typical TDD novice experience which lead to giving it up within the first couple weeks. We will demonstrate symptoms of test-design problems, and how to identify and overcome them.</p>
					<p>We will address some of the challenges we faced when implementing these practices. For example, that pairing doesn't mean you that can't think alone. If you need to work on an idea alone, go do it. When you're done exploring, bring the resulting _idea_, not the code, back to the team. With a partner, you'll reimplement it quickly. The results will be more widely understood, benefitting the project as a whole.</p>
					<p>Another challenge we will address out of the gate is how to start using TDD on a legacy code base that was not originally written with tests a frequent question that arises after basic intro TDD exercises. Using the workshop format, we will demonstrate adding a feature to an existing web app not currently under test. The two of us will pair program on the full-stack feature and use TDD as we go. We'll also be using the latest and greatest Javascript frameworks and tools: including React and Redux on the front end, Node.js and Express to build an API end point, and Jest as our test runner.</p>
					<p>After the brief demonstration, the audience will be given a TDD exercise to complete on their own or with a pair (encouraged) where tests are provided and one-by-one the pairs will work to make them all pass. Attendees will know TDD by the end of the session.</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-two">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/08/william-lyon.jpg"
						alt="William Lyon">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">01:30 - 02:10</span>
						<span class="ljs2017-template-schedule__name">William Lyon</span>
						<span class="ljs2017-template-schedule__title">Full Stack Graph Application Development Using the GRAND Stack: GraphQL, React, Apollo, and Neo4j Database</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
				</p>"Full-stack developers need to choose the right tools for building complex web applications. The stack of tools they choose needs to ensure developer productivity for building highly scalable applications using production ready tools that have integrations to ensure they work together nicely. In this presentation, we explore application development using the GRAND stack (GraphQL, React, Apollo, Neo4j) for building web applications backed by a graph database.</p>
				</p>We will explore building a movie recommendations web application using:</p>
				</p>* GraphQL - a query language for APIs that has been called ‰ÛÏREST 2.0‰Û as it offers many advantages over REST, also developed at Facebook</p>
				</p>* React - a leading frontend JavaScript framework developed for use at Facebook</p>
				</p>* Apollo - the most popular GraphQL client that glues together React components and GraphQL</p>
				</p>* Neo4j - the open source graph database that allows for modeling, storing, and querying data in real time, using the property graph data model and the Cypher query language</p>
				</p>We will learn just enough of each component to build a simple web application, including how to build a React component, an introduction to JSX, an overview of GraphQL and why it is a game-changer for front-end development, and we'll learn how to model, store, and query data in the Neo4j graph database using GraphQL to power our web application.</p>
				</p>After this talk you‰Ûªll have an understanding of the role each component plays in the stack, but especially why GraphQL is even more powerful when combined with a graph database such as Neo4j. Using graphs on the backend as well as the frontend allows for removing the mapping and translation layer, simplifying development and allows the developer to leverage the power of graphs for expressing complex data models as well as the power of graph database queries that can be used for (in this example) generating real-time personalized recommendations.</p>
				</p>No experience with GraphQL or graph databases is necessary to benefit from this talk, but some familiarity with JavaScript will be helpful."</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-two">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/08/matt-hayes-e1506046100422.jpg"
						alt="Matt Hayes">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">02:25 - 03:05</span>
						<span class="ljs2017-template-schedule__name">Matt Hayes</span>
						<span class="ljs2017-template-schedule__title">Particle Systems for Fun and Profit</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>Particle Systems for Fun and Profit</p>
					<p>Particle systems are most commonly used in games and physical simulations, but needn't be complex in order to reap many of their benefits. Using just a handful of patterns borrowed mostly from game programming, we can build a particle system that is easy to reason about and that has excellent performance characteristics. This combination of reason-about-ability and performance will enable rapid iteration over a number of possible uses and implementations of such a system.</p>
					<h5>This talk will be broken up into 4 sections:</h5>
					<p>1. Overview of the patterns we'll be using: command, game loop, component, and object pool. (10 minutes)</p>
					<p>2. Simple app scaffolding using Webpack 3 and Babel 6 (maybe 7). (5 minutes)</p>
					<p>3. The patterns applied/building up the particle system. (10 minutes)</p>
					<p>4. Implementations, ""live"" coding, demos and Q&amp;A. (15 minutes)</p>
					<h5>Some possible demos may include (but are not limited to):</h5>
					<p>- Explosions/fireworks (using canvas)</p>
					<p>- ""Metaballs"" (using SVG, maybe React)</p>
					<p>- Infinite scroll (using DOM, maybe React)</p>
					<p>Come for the explosions, stay for the infinite scroll!</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-one">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/11/martin-snyder-e1510112322868.jpeg"
						alt="Martin Snyder">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">03:20 - 4:55</span>
						<span class="ljs2017-template-schedule__name">Martin Snyder</span>
						<span class="ljs2017-template-schedule__title">Functional Programming in JavaScript Workshop</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>

				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-two">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/10/john-riviello.jpg"
						alt="John + Chris">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">03:20 - 04:00</span>
						<span class="ljs2017-template-schedule__name">John Riviello + Chris Lorenzo</span>
						<span class="ljs2017-template-schedule__title">Web Components: The Future of Web Development is Here</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-two">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/08/emily-freeman-e1503959441805.png"
						alt="Emily Freeman">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">04:15 - 4:55</span>
						<span class="ljs2017-template-schedule__name">Emily Freeman</span>
						<span class="ljs2017-template-schedule__title">The Dr. Seuss Guide to Code Craftsmanship</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="ljs2017-template-schedule__container-day" id="ljs2017-template-schedule__day2">
		<div class="ljs2017-template-schedule__date">
			<p>NOV 17TH</p>
			<p><a href="#ljs2017-template-schedule__day1">DAY 1</a> / <span class="ljs2017-template-schedule__date-active">DAY 2</span></p>
		</div>
		<div class="ljs2017-template-schedule__speakers">
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-three">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/09/lenandcorey-e1506375633789.jpg"
						alt="Len Smith">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">09:30 - 10:10</span>
						<span class="ljs2017-template-schedule__name">Len Smith</span>
						<span class="ljs2017-template-schedule__title">An Introduction to Functional Programming in JavaScript</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-one">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/11/eric-lewis.jpg"
						alt="Eric Lewis">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">10:25 - 12:00</span>
						<span class="ljs2017-template-schedule__name">Eric Lewis</span>
						<span class="ljs2017-template-schedule__title">Intro to React Workshop</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>

				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-two">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/10/kathryn-stracquatanio-e1507127514412.jpeg"
						alt="Kathryn Stracquatanio + Sarah Polansky">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">10:25 - 11:05</span>
						<span class="ljs2017-template-schedule__name">Kathryn Stracquatanio + Sarah Polansky</span>
						<span class="ljs2017-template-schedule__title">Please Touch: Creating Applications for Museums</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-two">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/10/michael-schoonmaker-e1507126818363.jpg"
						alt="Michael Schoonmaker">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">11:20 - 12:00</span>
						<span class="ljs2017-template-schedule__name">Michael Schoonmaker</span>
						<span class="ljs2017-template-schedule__title">JavaScriptural Exegesis</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__divider">
				<div>Lunch</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-one">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/10/brian-douglas.jpg"
						alt="Brian Douglas">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">01:30 - 03:05</span>
						<span class="ljs2017-template-schedule__name">Brian Douglas</span>
						<span class="ljs2017-template-schedule__title">Zero to Webpack Workshop</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>

				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-two">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/10/hao-luo-e1507820329193.jpg"
						alt="Hao Lou">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">01:30 - 02:10</span>
						<span class="ljs2017-template-schedule__name">Hao Luo</span>
						<span class="ljs2017-template-schedule__title">Understanding Async Await in Javascript</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-two">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/09/nate-abele-e1506526195311.jpg"
						alt="Nate Abele">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">02:25 - 03:05</span>
						<span class="ljs2017-template-schedule__name">Nate Abele</span>
						<span class="ljs2017-template-schedule__title">Un-dux Your Front-end</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-three">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="https://libertyjs.com/wp-content/uploads/2017/08/tierney-cyren-e1503959826368.jpg"
						alt="Tierney Cyren">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">03:20 - 04:00</span>
						<span class="ljs2017-template-schedule__name">Tierney Cyren</span>
						<span class="ljs2017-template-schedule__title">Building the Foundations of the Node.js Community</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						TBA
					</p>
				</div>
			</div>
			<div class="ljs2017-template-schedule__keynote">
				<div class="ljs2017-template-schedule__speaker-body">
					<img
						src="<?php echo get_stylesheet_directory_uri(); ?>/img/ljs2017-keynote-pam-selle.jpg"
						alt="Pam Selle">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">04:15 - 4:55 (KEYNOTE SPEAKER)</span>
						<span class="ljs2017-template-schedule__name">Pam Selle</span>
						<span class="ljs2017-template-schedule__title">TBA</span>
					</div>
					<div class="ljs2017-template-schedule__more-toggle">
						<i
							class="fa fa-chevron-up ljs2017-template-schedule__more-toggle-icon"
							aria-hidden="true"></i>
					</div>
				</div>
				<div class="ljs2017-template-schedule__speaker-more">
					<p>
						The Serverless Revolution
					</p>

				</div>
			</div>
			<div class="ljs2017-template-schedule__speaker ljs2017-template-schedule__speaker-three">
				<div class="ljs2017-template-schedule__speaker-body">
					<div class="ljs2017-template-schedule__speaker-info">
						<span class="ljs2017-template-schedule__time">05:00 - 07:00</span>
						<span class="ljs2017-template-schedule__name">
							Afterparty at
							<a
								class="ljs2017-template-schedule__link"
								href="http://jjbootleggers.com/"
								target="_blank">
								JJ Bootleggers
							</a>
						</span>
						<span class="ljs2017-template-schedule__title"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();
