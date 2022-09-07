<?php 
/**
 * Plugin Name:  Anonymize bbPress
 * Description:  bbPress anonymous modifications.
 * Version:      0.0.2
 * Requires PHP: 5.4
 */

/**
 * Changelog.
 *
 * 0.0.2 Fixed formatting. 
 *       Added changelog.
 * 0.0.1 Init.
 */

namespace BBPMods\Anonymous;

/**
 * Init.
 */
add_action( 'init', function(){

	add_filter( 'bbp_current_user_can_access_anonymous_user_form', '__return_false' );

	$anonymous_users = array( 
		array ( 'Aaron',    'aaron@example.com' ),
		array ( 'Abigail',    'abigail@example.com' ),
		array ( 'Adam',    'adam@example.com' ),
		array ( 'Alan',    'alan@example.com' ),
		array ( 'Albert',    'albert@example.com' ),
		array ( 'Alexander',    'alexander@example.com' ),
		array ( 'Alexis',    'alexis@example.com' ),
		array ( 'Alice',    'alice@example.com' ),
		array ( 'Amanda',    'amanda@example.com' ),
		array ( 'Amber',    'amber@example.com' ),
		array ( 'Amy',    'amy@example.com' ),
		array ( 'Andrea',    'andrea@example.com' ),
		array ( 'Andrew',    'andrew@example.com' ),
		array ( 'Angela',    'angela@example.com' ),
		array ( 'Ann',    'ann@example.com' ),
		array ( 'Anna',    'anna@example.com' ),
		array ( 'Anthony',    'anthony@example.com' ),
		array ( 'Arthur',    'arthur@example.com' ),
		array ( 'Ashley',    'ashley@example.com' ),
		array ( 'Austin',    'austin@example.com' ),
		array ( 'Barbara',    'barbara@example.com' ),
		array ( 'Benjamin',    'benjamin@example.com' ),
		array ( 'Betty',    'betty@example.com' ),
		array ( 'Beverly',    'beverly@example.com' ),
		array ( 'Billy',    'billy@example.com' ),
		array ( 'Bobby',    'bobby@example.com' ),
		array ( 'Brandon',    'brandon@example.com' ),
		array ( 'Brenda',    'brenda@example.com' ),
		array ( 'Brian',    'brian@example.com' ),
		array ( 'Brittany',    'brittany@example.com' ),
		array ( 'Bruce',    'bruce@example.com' ),
		array ( 'Bryan',    'bryan@example.com' ),
		array ( 'Carl',    'carl@example.com' ),
		array ( 'Carol',    'carol@example.com' ),
		array ( 'Carolyn',    'carolyn@example.com' ),
		array ( 'Catherine',    'catherine@example.com' ),
		array ( 'Charles',    'charles@example.com' ),
		array ( 'Charlotte',    'charlotte@example.com' ),
		array ( 'Cheryl',    'cheryl@example.com' ),
		array ( 'Christian',    'christian@example.com' ),
		array ( 'Christina',    'christina@example.com' ),
		array ( 'Christine',    'christine@example.com' ),
		array ( 'Christopher',    'christopher@example.com' ),
		array ( 'Cynthia',    'cynthia@example.com' ),
		array ( 'Daniel',    'daniel@example.com' ),
		array ( 'Danielle',    'danielle@example.com' ),
		array ( 'David',    'david@example.com' ),
		array ( 'Deborah',    'deborah@example.com' ),
		array ( 'Debra',    'debra@example.com' ),
		array ( 'Denise',    'denise@example.com' ),
		array ( 'Dennis',    'dennis@example.com' ),
		array ( 'Diana',    'diana@example.com' ),
		array ( 'Diane',    'diane@example.com' ),
		array ( 'Donald',    'donald@example.com' ),
		array ( 'Donna',    'donna@example.com' ),
		array ( 'Doris',    'doris@example.com' ),
		array ( 'Dorothy',    'dorothy@example.com' ),
		array ( 'Douglas',    'douglas@example.com' ),
		array ( 'Dylan',    'dylan@example.com' ),
		array ( 'Edward',    'edward@example.com' ),
		array ( 'Elijah',    'elijah@example.com' ),
		array ( 'Elizabeth',    'elizabeth@example.com' ),
		array ( 'Emily',    'emily@example.com' ),
		array ( 'Emma',    'emma@example.com' ),
		array ( 'Eric',    'eric@example.com' ),
		array ( 'Ethan',    'ethan@example.com' ),
		array ( 'Eugene',    'eugene@example.com' ),
		array ( 'Evelyn',    'evelyn@example.com' ),
		array ( 'Frances',    'frances@example.com' ),
		array ( 'Frank',    'frank@example.com' ),
		array ( 'Gabriel',    'gabriel@example.com' ),
		array ( 'Gary',    'gary@example.com' ),
		array ( 'George',    'george@example.com' ),
		array ( 'Gerald',    'gerald@example.com' ),
		array ( 'Gloria',    'gloria@example.com' ),
		array ( 'Grace',    'grace@example.com' ),
		array ( 'Gregory',    'gregory@example.com' ),
		array ( 'Hannah',    'hannah@example.com' ),
		array ( 'Harold',    'harold@example.com' ),
		array ( 'Heather',    'heather@example.com' ),
		array ( 'Helen',    'helen@example.com' ),
		array ( 'Henry',    'henry@example.com' ),
		array ( 'Isabella',    'isabella@example.com' ),
		array ( 'Jack',    'jack@example.com' ),
		array ( 'Jacob',    'jacob@example.com' ),
		array ( 'Jacqueline',    'jacqueline@example.com' ),
		array ( 'James',    'james@example.com' ),
		array ( 'Janet',    'janet@example.com' ),
		array ( 'Janice',    'janice@example.com' ),
		array ( 'Jason',    'jason@example.com' ),
		array ( 'Jean',    'jean@example.com' ),
		array ( 'Jeffrey',    'jeffrey@example.com' ),
		array ( 'Jennifer',    'jennifer@example.com' ),
		array ( 'Jeremy',    'jeremy@example.com' ),
		array ( 'Jerry',    'jerry@example.com' ),
		array ( 'Jesse',    'jesse@example.com' ),
		array ( 'Jessica',    'jessica@example.com' ),
		array ( 'Joan',    'joan@example.com' ),
		array ( 'Joe',    'joe@example.com' ),
		array ( 'John',    'john@example.com' ),
		array ( 'Jonathan',    'jonathan@example.com' ),
		array ( 'Jordan',    'jordan@example.com' ),
		array ( 'Jose',    'jose@example.com' ),
		array ( 'Joseph',    'joseph@example.com' ),
		array ( 'Joshua',    'joshua@example.com' ),
		array ( 'Joyce',    'joyce@example.com' ),
		array ( 'Juan',    'juan@example.com' ),
		array ( 'Judith',    'judith@example.com' ),
		array ( 'Judy',    'judy@example.com' ),
		array ( 'Julia',    'julia@example.com' ),
		array ( 'Julie',    'julie@example.com' ),
		array ( 'Justin',    'justin@example.com' ),
		array ( 'Karen',    'karen@example.com' ),
		array ( 'Katherine',    'katherine@example.com' ),
		array ( 'Kathleen',    'kathleen@example.com' ),
		array ( 'Kathryn',    'kathryn@example.com' ),
		array ( 'Kayla',    'kayla@example.com' ),
		array ( 'Keith',    'keith@example.com' ),
		array ( 'Kelly',    'kelly@example.com' ),
		array ( 'Kenneth',    'kenneth@example.com' ),
		array ( 'Kevin',    'kevin@example.com' ),
		array ( 'Kimberly',    'kimberly@example.com' ),
		array ( 'Kyle',    'kyle@example.com' ),
		array ( 'Larry',    'larry@example.com' ),
		array ( 'Laura',    'laura@example.com' ),
		array ( 'Lauren',    'lauren@example.com' ),
		array ( 'Lawrence',    'lawrence@example.com' ),
		array ( 'Linda',    'linda@example.com' ),
		array ( 'Lisa',    'lisa@example.com' ),
		array ( 'Logan',    'logan@example.com' ),
		array ( 'Lori',    'lori@example.com' ),
		array ( 'Louis',    'louis@example.com' ),
		array ( 'Madison',    'madison@example.com' ),
		array ( 'Margaret',    'margaret@example.com' ),
		array ( 'Maria',    'maria@example.com' ),
		array ( 'Marie',    'marie@example.com' ),
		array ( 'Marilyn',    'marilyn@example.com' ),
		array ( 'Mark',    'mark@example.com' ),
		array ( 'Martha',    'martha@example.com' ),
		array ( 'Mary',    'mary@example.com' ),
		array ( 'Mason',    'mason@example.com' ),
		array ( 'Matthew',    'matthew@example.com' ),
		array ( 'Megan',    'megan@example.com' ),
		array ( 'Melissa',    'melissa@example.com' ),
		array ( 'Michael',    'michael@example.com' ),
		array ( 'Michelle',    'michelle@example.com' ),
		array ( 'Nancy',    'nancy@example.com' ),
		array ( 'Natalie',    'natalie@example.com' ),
		array ( 'Nathan',    'nathan@example.com' ),
		array ( 'Nicholas',    'nicholas@example.com' ),
		array ( 'Nicole',    'nicole@example.com' ),
		array ( 'Noah',    'noah@example.com' ),
		array ( 'Olivia',    'olivia@example.com' ),
		array ( 'Pamela',    'pamela@example.com' ),
		array ( 'Patricia',    'patricia@example.com' ),
		array ( 'Patrick',    'patrick@example.com' ),
		array ( 'Paul',    'paul@example.com' ),
		array ( 'Peter',    'peter@example.com' ),
		array ( 'Philip',    'philip@example.com' ),
		array ( 'Rachel',    'rachel@example.com' ),
		array ( 'Ralph',    'ralph@example.com' ),
		array ( 'Randy',    'randy@example.com' ),
		array ( 'Raymond',    'raymond@example.com' ),
		array ( 'Rebecca',    'rebecca@example.com' ),
		array ( 'Richard',    'richard@example.com' ),
		array ( 'Robert',    'robert@example.com' ),
		array ( 'Roger',    'roger@example.com' ),
		array ( 'Ronald',    'ronald@example.com' ),
		array ( 'Roy',    'roy@example.com' ),
		array ( 'Russell',    'russell@example.com' ),
		array ( 'Ruth',    'ruth@example.com' ),
		array ( 'Ryan',    'ryan@example.com' ),
		array ( 'Samantha',    'samantha@example.com' ),
		array ( 'Samuel',    'samuel@example.com' ),
		array ( 'Sandra',    'sandra@example.com' ),
		array ( 'Sara',    'sara@example.com' ),
		array ( 'Sarah',    'sarah@example.com' ),
		array ( 'Scott',    'scott@example.com' ),
		array ( 'Sean',    'sean@example.com' ),
		array ( 'Sharon',    'sharon@example.com' ),
		array ( 'Shirley',    'shirley@example.com' ),
		array ( 'Sophia',    'sophia@example.com' ),
		array ( 'Stephanie',    'stephanie@example.com' ),
		array ( 'Stephen',    'stephen@example.com' ),
		array ( 'Steven',    'steven@example.com' ),
		array ( 'Susan',    'susan@example.com' ),
		array ( 'Teresa',    'teresa@example.com' ),
		array ( 'Terry',    'terry@example.com' ),
		array ( 'Theresa',    'theresa@example.com' ),
		array ( 'Thomas',    'thomas@example.com' ),
		array ( 'Timothy',    'timothy@example.com' ),
		array ( 'Tyler',    'tyler@example.com' ),
		array ( 'Victoria',    'victoria@example.com' ),
		array ( 'Vincent',    'vincent@example.com' ),
		array ( 'Virginia',    'virginia@example.com' ),
		array ( 'Walter',    'walter@example.com' ),
		array ( 'Wayne',    'wayne@example.com' ),
		array ( 'William',    'william@example.com' ),
		array ( 'Willie',    'willie@example.com' ),
		array ( 'Zachary',    'zachary@example.com' ),
	);
	
	/**
	 * Filter anonymous users.
	 *
	 * @param	array	$anonymous_users  Array of arrays with name and email.
	 */
	$anonymous_users = apply_filters( 'bbpmods_anonymous_users', $anonymous_users );

	$obj = new Empty_Anonymous_Replies();
	$obj ->set_anonymous_users( $anonymous_users )
	     ->init();
} );


/**
 * Class Empty_Anonymous_Replies.
 *
 * @since 0.0.1
 */
class Empty_Anonymous_Replies {

	/**
	 * @var int
	 *
	 * @since 0.0.1
	 */
	protected $user_index      = 0;

	/**
	 * @var int
	 *
	 * @since 0.0.1
	 */
	protected $name_index      = 0;

	/**
	 * @var int
	 *
	 * @since 0.0.1
	 */
	protected $email_index     = 1;

	/**
	 * @var array
	 *
	 * @since 0.0.1
	 */
	protected $anonymous_users = array();

	/**
	 * Set anonymous users.
	 *
	 * @since 0.0.1
	 *
	 * @param	array	$anonymous_users  Array of arrays with name and email.
	 */
	public function set_anonymous_users( $anonymous_users ) {

		$this->anonymous_users = $anonymous_users;

		return $this;
	}

	/**
	 * Init.
	 *
	 * @since 0.0.1
	 */
	public function init() {

		// Filters in order of activation.
		add_filter( 'bbp_before_filter_anonymous_post_data_parse_args', 
					 array( $this, 'bbp_before_filter_anonymous_post_data_parse_args' ),                    
					 10 );

		add_filter( 'bbp_pre_anonymous_post_author_name', 
					 array( $this,  'bbp_pre_anonymous_post_author_name' ) );

		add_filter( 'bbp_pre_anonymous_post_author_email',  
					 array( $this, 'bbp_pre_anonymous_post_author_email' ) );

		add_filter( 'bbp_filter_anonymous_post_data', 
					 array( $this, 'bbp_filter_anonymous_post_data' ),                    
					 11, 2 );
	}

	/**
	 * Filter's callback
	 *
	 * @since 0.0.1
	 *
	 * @param	array	$r Anonymous post data.
	 */
	public function bbp_before_filter_anonymous_post_data_parse_args( $r ) {

		if ( ! empty( $this->anonymous_users ) ) {
			$this->user_index = array_rand( $this->anonymous_users );
		}

		return $r;
	}

	/**
	 * Filter's callback
	 *
	 * @since 0.0.1
	 *
	 * @param	string	$name Anonymous user's name.
	 */
	public function bbp_pre_anonymous_post_author_name( $name ) {

		remove_filter( current_filter(), array( $this, __FUNCTION__ ) );

		if( empty( $name ) && ! empty( $this->anonymous_users ) ) {
			$name = $this->anonymous_users[$this->user_index][$this->name_index];
		}

		return $name;
	}

	/**
	 * Filter's callback
	 *
	 * @since 0.0.1
	 *
	 * @param	string	$email Anonymous user's email.
	 */
	public function bbp_pre_anonymous_post_author_email( $email ) {

		remove_filter( current_filter(), array( $this, __FUNCTION__ ) );

		if( empty( $email ) && ! empty( $this->anonymous_users ) ) {
			$email = $this->anonymous_users[$this->user_index][$this->email_index];
		}

		return $email;
	}

	/**
	 * Filter's callback
	 *
	 * @since 0.0.1
	 *
	 * @param	array	$retval Anonymous post data.
	 * @param	array	$r      Arguments.
	 */
	public function bbp_filter_anonymous_post_data( $retval, $r ) {

		if ( empty( $this->anonymous_users ) ) {
			return $retval;
		}

		if( $this->anonymous_users[$this->user_index][$this->name_index] === $r['bbp_anonymous_name'] 
			&& $this->anonymous_users[$this->user_index][$this->email_index] === $r['bbp_anonymous_email']
		) {
			// Reset the input to skip writing cookies.
			$retval = array();

			// Activate the IP flood check.
			$retval['bbp_anonymous_flood_check'] = '1';
		}       

		return $retval;
	}
}

// Ref: https://www.ssa.gov/oact/babynames/decades/century.html
