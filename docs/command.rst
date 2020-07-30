Command-line interface
======================

**Create a user**

.. code-block:: bash

    $ php app/console templeiro:user-create username password email fullname

**Create a project**

.. code-block:: bash

    $ php app/console templeiro:project-create myproject "My project"

**Grant a user access to a project**

.. code-block:: bash

    $ php app/console templeiro:user-role-create myuser "Lead developer" myproject

**Configuration of Templeiro**

If you need to read configuration from Templeiro, please use the ``templeiro:config:show``
command:

.. code-block:: bash

    $ php app/console templeiro:config:show

    name             Templeiro
    baseline         git repositories inside your infrastructure
    ssh_access       git@example.org
    repository_path  /path/to/repositories

If you want to get a specific value:

.. code-block:: bash

    $ php app/console templeiro:config:show repository_path

    /path/to/repositories
