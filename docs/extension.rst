Extend Templeiro
===============

Register your listener
::::::::::::::::::::::

Declare a service in container and tag it as a ``templeiro.event_listener``:

.. code-block:: xml

    <service id="your_listener_id" class="...">
        <tag name="templeiro.event_listener" event="templeiro.project_push" method="onPush" />
    </service>

Events
::::::

templeiro.project_create
-----------------------

**class**: Templeiro\Bundle\CoreBundle\EventDispatcher\Event\ProjectEvent

templeiro.project_push
---------------------

**class**: Templeiro\Bundle\CoreBundle\EventDispatcher\Event\PushReferenceEvent

templeiro.project_delete
-----------------------

**class**: Templeiro\Bundle\CoreBundle\EventDispatcher\Event\ProjectEvent

Create new jobs
:::::::::::::::

If you want to delegate some jobs to the backend, you can use the **TempleiroJobBundle**,
a bundle that helps you to do so.

First, create a new *Job* class, consisting of what you plan to delegate to background:

.. code-block:: php

    namespace Acme\DemoBundle\Job;

    use Templeiro\Bundle\JobBundle\Job\Job;

    class SendEmailJob extends Job
    {
        public function execute()
        {
            $mailer = $this->getService('mailer');

            // ...
        }
    }

Declare your new job in configuration:

.. code-block:: yaml

    # app/config/config.yml
    templeiro_job:
        job_classes:
            send_email: Acme\DemoBundle\Job\SendEmailJob

Now, you can effectively create and delegate jobs to the backend:

.. code-block:: php

    # in your controller
    public function indexAction()
    {
        $job = new SendEmailJob();
        $this->get('templeiro.job_manager')->delegate($job);

        // ...
    }

The principle of a background job is that you cannot be sure of "when" it will effectively
be executed. For this reason, a waiting page can be shown to the user while the job gets
executed:

.. code-block:: php

    # in your controller
    public function indexAction()
    {
        // ...

        return $this->redirect($this->generateUrl('job_wait', array(
            'id'       => $job->getId(),
            'pending'  => 'Sending email...',
            'finished' => 'Mail sent',
            'redirect' => $this->generateUrl('email_sent')
        )));
    }
